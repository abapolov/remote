<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Traits\TimestampableTrait;

/**
 * @ORM\Table(name="source")
 * @ORM\Entity(repositoryClass="App\Repository\SourceRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Source
{
    use TimestampableTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $siteUrl;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $className;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logoPath;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getSiteUrl(): ?string
    {
        return $this->siteUrl;
    }

    /**
     * @param string $siteUrl
     * @return Source
     */
    public function setSiteUrl(string $siteUrl): self
    {
        $this->siteUrl = $siteUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Source
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getClassName(): ?string
    {
        return $this->className;
    }

    /**
     * @param string $className
     * @return Source
     */
    public function setClassName(string $className): self
    {
        $this->className = $className;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLogoPath(): ?string
    {
        return $this->logoPath;
    }

    /**
     * @param string $logoPath
     * @return Source
     */
    public function setLogoPath(string $logoPath): self
    {
        $this->logoPath = $logoPath;

        return $this;
    }
}
