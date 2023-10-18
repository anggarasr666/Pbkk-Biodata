<?php

namespace App\Http\Module\Domain\Models;

use App\Http\Module\Domain\StatusLulus\StatusLulus;
use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use App\Http\Module\Domain\Enum\Jurusan;

class Biodata
{

    /**
     * @param ?int $id
     * @param string $nama
     * @param string $telepon
     * @param int $umur
     * @param string $jurusan
     * @param StatusLulus $status
     */
    public function __construct(
      private ?int $id,
      private string $nama,
      private string $telepon,
      private int $umur,
      private string $jurusan,
      private StatusLulus $status,
    )
    {}

    public function getID(): ?int
    {
        return $this->id;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getTelepon(): string
    {
        return $this->telepon;
    }

    public function getUmur(): string
    {
        return $this->umur;
    }

    public function getJurusan(): string
    {
        return $this->jurusan;
    }

    public function getStatusLulus(): StatusLulus
    {
        return $this->status;
    }
}