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

namespace Google\Service\AccessContextManager;

class EgressPolicy extends \Google\Model
{
  /**
   * @var EgressFrom
   */
  public $egressFrom;
  protected $egressFromType = EgressFrom::class;
  protected $egressFromDataType = '';
  /**
   * @var EgressTo
   */
  public $egressTo;
  protected $egressToType = EgressTo::class;
  protected $egressToDataType = '';

  /**
   * @param EgressFrom
   */
  public function setEgressFrom(EgressFrom $egressFrom)
  {
    $this->egressFrom = $egressFrom;
  }
  /**
   * @return EgressFrom
   */
  public function getEgressFrom()
  {
    return $this->egressFrom;
  }
  /**
   * @param EgressTo
   */
  public function setEgressTo(EgressTo $egressTo)
  {
    $this->egressTo = $egressTo;
  }
  /**
   * @return EgressTo
   */
  public function getEgressTo()
  {
    return $this->egressTo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EgressPolicy::class, 'Google_Service_AccessContextManager_EgressPolicy');
