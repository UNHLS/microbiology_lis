<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;
/**
* Class for holding topup requests from the bench to the inventory
*/
class TopupRequest extends Eloquent {
    use SoftDeletingTrait;
	protected $table = 'topup_requests';
	protected $dates = ['deleted_at'];

	/**
	* Commodities relationship
	*/
	public function commodity()
	{
		return $this->belongsTo('Commodity');
	}

	/**
	* Relationship between commodity and the user who handled it
	*/
	public function user(){
		return $this->belongsTo('user');
	}

	/**
	 * TestCategory relationship
	 */
	public function section()
	{
		return $this->belongsTo('TestCategory', 'test_category_id');
	}
}