<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceFieldsRepository")
 */
class InvoiceFields
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="Invoice", inversedBy="fields")
     * @ORM\JoinColumn(name="invoice_id", referencedColumnName="id")
     */
    private $invoice_id;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $amount;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     */
    private $amount_vat;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $amount_total;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvoiceId(): ?int
    {
        return $this->invoice_id;
    }

    public function setInvoiceId(int $invoice_id): self
    {
        $this->invoice_id = $invoice_id;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getAmountVat(): ?string
    {
        return $this->amount_vat;
    }

    public function setAmountVat(string $amount_vat): self
    {
        $this->amount_vat = $amount_vat;

        return $this;
    }

    public function getAmountTotal(): ?string
    {
        return $this->amount_total;
    }

    public function setAmountTotal(string $amount_total): self
    {
        $this->amount_total = $amount_total;

        return $this;
    }
}
