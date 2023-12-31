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

namespace Google\Service\Vision;

class ListReferenceImagesResponse extends \Google\Collection
{
  protected $collection_key = 'referenceImages';
  /**
   * @var string
   */
  public $nextPageToken;
  /**
   * @var int
   */
  public $pageSize;
  /**
   * @var ReferenceImage[]
   */
  public $referenceImages;
  protected $referenceImagesType = ReferenceImage::class;
  protected $referenceImagesDataType = 'array';

  /**
   * @param string
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * @param int
   */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /**
   * @return int
   */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /**
   * @param ReferenceImage[]
   */
  public function setReferenceImages($referenceImages)
  {
    $this->referenceImages = $referenceImages;
  }
  /**
   * @return ReferenceImage[]
   */
  public function getReferenceImages()
  {
    return $this->referenceImages;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListReferenceImagesResponse::class, 'Google_Service_Vision_ListReferenceImagesResponse');
