<?php

trait Geocodeable
{

    protected $address;

    protected $geocoder;

    protected $geocoder_result;

    public function setGeocoder(\Geocoder\GeocoderInterface $geocoder)
    {
        $this->geocoder = $geocoder;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getLatitude()
    {
        if (isset($this->geocoder_result) === false) {
            $this->geocoderAddress();
        }

        return $this->geocoder_result->getLatitude();
    }

    public function getLongitude()
    {
        if (isset($this->geocoder_result) === false) {
            $this->geocoderAddress();
        }

        return $this->geocoder_result->getLongitude();
    }

    protected function geocoderAddress()
    {
        $this->geocoder_result = $this->geocoder->geocoder($this->address);

        return true;
    }
}