<?php

namespace Josrom\MapAddress;

use Laravel\Nova\Fields\Field;

class MapAddress extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'map_address';

    /**
     * Set the initial location.
     *
     * @param float $latitude
     * @param float $longitude
     *
     * @return self
     */
    public function initLocation($latitude, $longitude)
    {
        return $this->withMeta([
            'initial_lat' => $latitude,
            'initial_lng' => $longitude,
        ]);
    }

    /**
     * Set the set location.
     *
     * @param float $latitude
     * @param float $longitude
     *
     * @return self
     */
    public function setLocation($latitude, $longitude)
    {
        return $this->withMeta([
            'lat' => $latitude,
            'lng' => $longitude,
        ]);
    }

    /**
     * Set the zoom of map.
     *
     * @param $zoom
     *
     * @return self
     */
    public function zoom($zoom)
    {
        return $this->withMeta([
            'zoom' => $zoom,
        ]);
    }

    /**
     * Set the latitude field name.
     *
     * @param $latitude
     *
     * @return self
     */
    public function setLatitudeField($latitude)
    {
        return $this->withMeta([
            'latitude' => $latitude,
        ]);
    }

    /**
     * Set the longitude field name.
     *
     * @param $longitude
     *
     * @return self
     */
    public function setLongitudeField($longitude)
    {
        return $this->withMeta([
            'longitude' => $longitude,
        ]);
    }

    /**
     * Set the result type that should be used from google results. See google documentation for more info: https://developers.google.com/maps/documentation/geocoding/intro#Types
     *
     * @param string $type
     *
     * @return self
     */
    public function setGoogleResultType($type)
    {
        return $this->withMeta([
            'google_result_type' => $type,
        ]);
    }
}
