<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Contentwarehouse;

class AssistantApiSettingsDeviceSupervisionSettings extends \Google\Model
{
  /**
   * @var AssistantApiSettingsDeviceDowntimeSettings
   */
  public $downtimeSettings;
  protected $downtimeSettingsType = AssistantApiSettingsDeviceDowntimeSettings::class;
  protected $downtimeSettingsDataType = '';
  /**
   * @var AssistantApiSettingsDeviceFeatureFilters
   */
  public $featureFilters;
  protected $featureFiltersType = AssistantApiSettingsDeviceFeatureFilters::class;
  protected $featureFiltersDataType = '';

  /**
   * @param AssistantApiSettingsDeviceDowntimeSettings
   */
  public function setDowntimeSettings(AssistantApiSettingsDeviceDowntimeSettings $downtimeSettings)
  {
    $this->downtimeSettings = $downtimeSettings;
  }
  /**
   * @return AssistantApiSettingsDeviceDowntimeSettings
   */
  public function getDowntimeSettings()
  {
    return $this->downtimeSettings;
  }
  /**
   * @param AssistantApiSettingsDeviceFeatureFilters
   */
  public function setFeatureFilters(AssistantApiSettingsDeviceFeatureFilters $featureFilters)
  {
    $this->featureFilters = $featureFilters;
  }
  /**
   * @return AssistantApiSettingsDeviceFeatureFilters
   */
  public function getFeatureFilters()
  {
    return $this->featureFilters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantApiSettingsDeviceSupervisionSettings::class, 'Google_Service_Contentwarehouse_AssistantApiSettingsDeviceSupervisionSettings');
