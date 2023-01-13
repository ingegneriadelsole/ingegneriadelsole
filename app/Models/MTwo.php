<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;

	class MTwo extends Model
	{
		use HasFactory;

		protected $guarded = [];

		public function system() {
			$this->belongsTo(System::class);
		}
	}
