<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceRepository")
 */
class Invoice
{

    /**
     * @ORM\OneToMany(targetEntity="InvoiceFields",mappedBy="invoice_id")
     * 
     */
    private $fields;

    public function __construct()
    {
        //$this->filds=new ArrayCollection();
        $this->fields = new ArrayCollection();
    }
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $invoice_date;

    /**
     * @ORM\Column(type="integer")
     */
    private $invoice_number;

    /**
     * @ORM\Column(type="integer")
     */
    private $client_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvoiceDate(): ?\DateTimeInterface
    {
        return $this->invoice_date;
    }

    public function setInvoiceDate(\DateTimeInterface $invoice_date): self
    {
        $this->invoice_date = $invoice_date;

        return $this;
    }

    public function getInvoiceNumber(): ?int
    {
        return $this->invoice_number;
    }

    public function setInvoiceNumber(int $invoice_number): self
    {
        $this->invoice_number = $invoice_number;

        return $this;
    }

    public function getClientId(): ?int
    {
        return $this->client_id;
    }

    public function setClientId(int $client_id): self
    {
        $this->client_id = $client_id;

        return $this;
    }

    /**
     * @return Collection|InvoiceFields[]
     */
    public function getFields(): Collection
    {
        return $this->fields;
    }

    public function addField(InvoiceFields $field): self
    {
        if (!$this->fields->contains($field)) {
            $this->fields[] = $field;
           
        }

        return $this;
    }

    public function removeField(InvoiceFields $field): self
    {
        if ($this->fields->contains($field)) {
            $this->fields->removeElement($field);
            // set the owning side to null (unless already changed)
            if ($field->getInvoiceId() === $this) {
                $field->setInvoiceId(null);
            }
        }

        return $this;
    }
}
