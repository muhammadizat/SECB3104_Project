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

namespace Google\Service\Testing;

class DeviceFile extends \Google\Model
{
  /**
   * @var ObbFile
   */
  public $obbFile;
  protected $obbFileType = ObbFile::class;
  protected $obbFileDataType = '';
  /**
   * @var RegularFile
   */
  public $regularFile;
  protected $regularFileType = RegularFile::class;
  protected $regularFileDataType = '';

  /**
   * @param ObbFile
   */
  public function setObbFile(ObbFile $obbFile)
  {
    $this->obbFile = $obbFile;
  }
  /**
   * @return ObbFile
   */
  public function getObbFile()
  {
    return $this->obbFile;
  }
  /**
   * @param RegularFile
   */
  public function setRegularFile(RegularFile $regularFile)
  {
    $this->regularFile = $regularFile;
  }
  /**
   * @return RegularFile
   */
  public function getRegularFile()
  {
    return $this->regularFile;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeviceFile::class, 'Google_Service_Testing_DeviceFile');
