<?php

declare(strict_types=1);
/**
 * This file is part of Bailing.
 *
 * @link     https://www.yunbailing.cn
 * @document https://www.yunbailing.cn/document/
 * @contact  www.yunbailing.cn 7*12 9:00-21:00
 * @license  https://www.yunbailing.cn/LICENSE
 */
namespace Endness\Factory\bean;

/**
 * 轩辕API一步发起签署-doc参数.
 * @date  2020/11/24 10:22
 */
class Doc implements \JsonSerializable
{
    private $fileId;

    private $fileName;

    private $encryption;

    private $filePassword;

    /**
     * Doc constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * @param mixed $fileId
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEncryption()
    {
        return $this->encryption;
    }

    /**
     * @param mixed $encryption
     */
    public function setEncryption($encryption)
    {
        $this->encryption = $encryption;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFilePassword()
    {
        return $this->filePassword;
    }

    /**
     * @param mixed $filePassword
     */
    public function setFilePassword($filePassword)
    {
        $this->filePassword = $filePassword;
        return $this;
    }

    /**
     * Specify data which should be serialized to JSON.
     * @see https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     *               which is a value of any type other than a resource
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        $json = [];
        foreach ($this as $key => $value) {
            if ($value === null) {
                continue;
            }
            $json[$key] = $value;
        }
        return $json;
    }
}
