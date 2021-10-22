<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model {

    /**
     * @primaryKey string - primry key column.
     * @dateFormat string - date storage format
     * @guarded string - allow mass assignment except specified
     * @CREATED_AT string - creation date column
     * @UPDATED_AT string - updated date column
     */
    protected $primaryKey = 'contract_id';
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $guarded = ['contract_id'];
    const CREATED_AT = 'contract_created';
    const UPDATED_AT = 'contract_updated';

    /**
     * relatioship business rules:
     *         - the Creator (user) can have many Contract
     *         - the Contract belongs to one Creator (user)
     */
    public function creator() {
        return $this->belongsTo('App\Models\User', 'contract_creatorid', 'id');
    }

    /**
     * relatioship business rules:
     *         - the Category can have many Contracts
     *         - the Contract belongs to one Category
     */
    public function category() {
        return $this->belongsTo('App\Models\Category', 'contract_categoryid', 'category_id');
    }

    /**
     * relatioship business rules:
     *         - the Contract belongs to one Client
     */
    public function client() {
        return $this->belongsTo('App\Models\Client', 'contract_clientid', 'client_id');
    }

    /**
     * relatioship business rules:
     *         - the Contract belongs to one Project
     */
    public function project() {
        return $this->belongsTo('App\Models\Project', 'contract_projectid', 'project_id');
    }

    /**
     * relatioship business rules:
     *         - the Contract can have many Tags
     *         - the Tags belongs to one Contract
     *         - other tags can belong to other tables
     */
    public function tags() {
        return $this->morphMany('App\Models\Tag', 'tagresource');
    }

}
