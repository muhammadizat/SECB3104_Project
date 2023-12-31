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

namespace Google\Service\DeploymentManager;

class TargetConfiguration extends \Google\Collection
{
  protected $collection_key = 'imports';
  /**
   * @var ConfigFile
   */
  public $config;
  protected $configType = ConfigFile::class;
  protected $configDataType = '';
  /**
   * @var ImportFile[]
   */
  public $imports;
  protected $importsType = ImportFile::class;
  protected $importsDataType = 'array';

  /**
   * @param ConfigFile
   */
  public function setConfig(ConfigFile $config)
  {
    $this->config = $config;
  }
  /**
   * @return ConfigFile
   */
  public function getConfig()
  {
    return $this->config;
  }
  /**
   * @param ImportFile[]
   */
  public function setImports($imports)
  {
    $this->imports = $imports;
  }
  /**
   * @return ImportFile[]
   */
  public function getImports()
  {
    return $this->imports;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetConfiguration::class, 'Google_Service_DeploymentManager_TargetConfiguration');
