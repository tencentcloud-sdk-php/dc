<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudAttachService请求参数结构体
 *
 * @method CreateCasInput getData() 获取创建敏捷上云入参
 * @method void setData(CreateCasInput $Data) 设置创建敏捷上云入参
 */
class CreateCloudAttachServiceRequest extends AbstractModel
{
    /**
     * @var CreateCasInput 创建敏捷上云入参
     */
    public $Data;

    /**
     * @param CreateCasInput $Data 创建敏捷上云入参
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new CreateCasInput();
            $this->Data->deserialize($param["Data"]);
        }
    }
}
