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

namespace Google\Service\Cloudchannel;

class GoogleCloudChannelV1ListPurchasableOffersResponse extends \Google\Collection
{
  protected $collection_key = 'purchasableOffers';
  /**
   * @var string
   */
  public $nextPageToken;
  /**
   * @var GoogleCloudChannelV1PurchasableOffer[]
   */
  public $purchasableOffers;
  protected $purchasableOffersType = GoogleCloudChannelV1PurchasableOffer::class;
  protected $purchasableOffersDataType = 'array';

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
   * @param GoogleCloudChannelV1PurchasableOffer[]
   */
  public function setPurchasableOffers($purchasableOffers)
  {
    $this->purchasableOffers = $purchasableOffers;
  }
  /**
   * @return GoogleCloudChannelV1PurchasableOffer[]
   */
  public function getPurchasableOffers()
  {
    return $this->purchasableOffers;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudChannelV1ListPurchasableOffersResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1ListPurchasableOffersResponse');
