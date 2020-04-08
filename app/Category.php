<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends \Baum\Node
{


	protected $fillable = array('name', 'parent_id','slug','file','filename','image','description');
	public $timestamps = false;


    public function product()
    {
        return $this->belongsTo('App\Product','category');
    }

	public static function getTree($categories) {

		$lists = '<ul>';
		foreach($categories as $category)
			$lists .= self::renderNode($category);
		$lists .= "</ul>";
		return $lists;
	}


	public static function renderNode($node) {
		$list = '<li><a href="/admin/categories/'.$node->id.'/edit">'.$node->name;
		if ( $node->children()->count() > 0 ) {
			$list .= '<ul>';
			foreach($node->children as $child)
				$list .= self::renderNode($child);
			$list .= "</ul>";
		}

		$list .= "</a></li>";
		return $list;
	}

    public static function getTreeHP($categories) {
        $lists = '<li class="dropdown mega-menu">';
        foreach($categories as $category)
            $lists .= self::renderNodeHP($category);
        $lists .= "</li>";
        return $lists;
    }


    public static function renderNodeHP($node) {
        $list = '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="/categories/'.$node->slug.'">'.$node->name.'</a>';
        if ( $node->children()->count() > 0 ) {
            $list .= '<ul class="dropdown-menu">';
            foreach($node->children as $child)
                $list .= self::renderNodeHP($child);
            $list .= "</ul>";
        }

        $list .= "</li>";
        return $list;
    }
}
