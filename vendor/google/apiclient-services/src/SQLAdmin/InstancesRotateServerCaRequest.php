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

namespace Google\Service\SQLAdmin;

class InstancesRotateServerCaRequest extends \Google\Model
{
  /**
   * @var RotateServerCaContext
   */
  public $rotateServerCaContext;
  protected $rotateServerCaContextType = RotateServerCaContext::class;
  protected $rotateServerCaContextDataType = '';

  /**
   * @param RotateServerCaContext
   */
  public function setRotateServerCaContext(RotateServerCaContext $rotateServerCaContext)
  {
    $this->rotateServerCaContext = $rotateServerCaContext;
  }
  /**
   * @return RotateServerCaContext
   */
  public function getRotateServerCaContext()
  {
    return $this->rotateServerCaContext;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstancesRotateServerCaRequest::class, 'Google_Service_SQLAdmin_InstancesRotateServerCaRequest');
