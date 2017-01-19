<?php

/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 17/01/2017
 * Time: 12:00
 */
class DepartmentsList
{

    public $mSelectedDepartment=0;
    public $mDepartments;
    public function __construct()
    {
        if(isset($_GET['DepartmentId']))
            $this->mSelectedDepartment=(int)$_GET['DepartmentId'];
    }
    public function init(){
        $this->mDepartments=Catalog::GetDepartments();
        for($i=0;$i<count($this->mDepartments);$i++){
            $this->mDepartments[$i]['link_to_department'] =
                Link::ToDepartment($this->mDepartments[$i]['department_id']);
        }
    }
}

/*            $this->mDepartments[$i]['link_to_department'] =
                'index.php?DepartmentId=' . $this->mDepartments[$i]['department_id'];*/