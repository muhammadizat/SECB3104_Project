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

class ImageUnderstandingIndexingLabel extends \Google\Collection
{
  protected $collection_key = 'metaData';
  /**
   * @var string
   */
  public $canonicalText;
  /**
   * @var string
   */
  public $entityId;
  /**
   * @var ImageUnderstandingIndexingMetaData[]
   */
  public $metaData;
  protected $metaDataType = ImageUnderstandingIndexingMetaData::class;
  protected $metaDataDataType = 'array';
  /**
   * @var float
   */
  public $score;

  /**
   * @param string
   */
  public function setCanonicalText($canonicalText)
  {
    $this->canonicalText = $canonicalText;
  }
  /**
   * @return string
   */
  public function getCanonicalText()
  {
    return $this->canonicalText;
  }
  /**
   * @param string
   */
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /**
   * @return string
   */
  public function getEntityId()
  {
    return $this->entityId;
  }
  /**
   * @param ImageUnderstandingIndexingMetaData[]
   */
  public function setMetaData($metaData)
  {
    $this->metaData = $metaData;
  }
  /**
   * @return ImageUnderstandingIndexingMetaData[]
   */
  public function getMetaData()
  {
    return $this->metaData;
  }
  /**
   * @param float
   */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /**
   * @return float
   */
  public function getScore()
  {
    return $this->score;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImageUnderstandingIndexingLabel::class, 'Google_Service_Contentwarehouse_ImageUnderstandingIndexingLabel');
