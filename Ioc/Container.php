<?php
/**
 * Created by PhpStorm.
 * User: MIOJI
 * Date: 2017/4/5
 * Time: 上午8:56
 */

namespace Ioc;

require_once 'Traveller.php';

class Container
{
    protected $bindings = [];

    /**
     * 绑定接口和生成相应实例的回调函数
     * @param $abstract
     * @param null $concrete
     * @param bool $shared
     */
    public function bind($abstract, $concrete = null, $shared = false)
    {
        if (!$concrete instanceof \Closure) {
            $concrete = $this->getClosure($abstract, $concrete);
        }

        $this->bindings[$abstract] = compact('concrete', 'shared');
    }

    //默认生成实例的回调函数
    public function getClosure($abstract, $concrete)
    {
        return function ($c) use ($abstract, $concrete) {
            $method = ($abstract == $concrete) ? 'build' : 'make';

            return $c->$method($concrete);
        };
    }

    /**
     * 生成实例化对象，首先解决接口和要实例化类之间的依赖关系
     * @param $abstract
     * @return mixed|object
     */
    public function make($abstract)
    {
        $concrete = $this->getConcrete($abstract);

        if ($this->isBuildable($concrete, $abstract)) {
            $object = $this->build($concrete);
        } else {
            $object = $this->make($concrete);
        }

        return $object;
    }

    public function isBuildable($concrete, $abstract)
    {
        return $concrete == $abstract || $concrete instanceof \Closure;
    }


    /**
     * 获取绑定的回调参数
     * @param $abstract
     * @return mixed
     */
    public function getConcrete($abstract)
    {
        if (!isset($this->bindings[$abstract])) {
            return $abstract;
        }

        return $this->bindings[$abstract]['concrete'];
    }

    /**
     * 实例化对象
     * @param $concrete
     * @return mixed|object
     */
    public function build($concrete)
    {
        if ($concrete instanceof \Closure) {
            return $concrete($this);
        }

        $reflector = new \ReflectionClass($concrete);
        if (!$reflector->isInstantiable()) {
            echo $message = 'Target [' . $concrete . '] is not instantiable';
        }
        $constructor = $reflector->getConstructor();
        if (is_null($constructor)) {
            return new $concrete;
        }
        $dependencies = $constructor->getParameters();
        $instances = $this->getDependencies($dependencies);

        return $reflector->newInstanceArgs($instances);
    }

    /**
     * 解决通过反射机制实例化对象时的依赖
     * @param $parameters
     * @return array
     */
    public function getDependencies($parameters)
    {
        $dependencies = [];

        foreach ($parameters as $parameter) {
            $dependency = $parameter->getClass();
            if (is_null($dependency)) {
                $dependencies[] = NULL;
            } else {
                $dependencies[] = $this->resolveClass($parameter);
            }
        }

        return (array)$dependencies;
    }

    protected function resolveClass(\ReflectionParameter $parameter)
    {
        return $this->make($parameter->getClass()->name);
    }
}

class Traveller
{
    protected $trafficTool;

    public function __construct(Visit $trafficTool)
    {
        $this->trafficTool = $trafficTool;
    }

    public function visitTibet()
    {
        $this->trafficTool->go();
    }
}