<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;

	class LegalRepresentative extends Model
	{
		use HasFactory;

		protected $guarded = [];

		public function setFiscalCodeAttribute($value) {
			$this->attributes['fiscal_code'] = strtoupper($value);
		}

		public function customer() {
			return $this->hasOne(Customer::class);
		}
	}
