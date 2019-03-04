<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Traits\TimestampableTrait;

/**
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="App\Repository\CompanyRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Company
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $siteUrl;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Company
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSiteUrl(): ?string
    {
        return $this->siteUrl;
    }

    /**
     * @param string|null $siteUrl
     * @return Company
     */
    public function setSiteUrl(?string $siteUrl): self
    {
        $this->siteUrl = $siteUrl;

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
     * @param string|null $logoPath
     * @return Company
     */
    public function setLogoPath(?string $logoPath): self
    {
        $this->logoPath = $logoPath;

        return $this;
    }
}
