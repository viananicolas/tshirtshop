{*departments_list.tpl*}
{load_presentation_object filename="departments_list" assign="obj"}
<div class="box">
    <p class="box-title">Escolha um departamento</p>
    <ul>
        {section name=i loop=$obj->mDepartments}
            {assign var=selected value=""}
            {if ($obj->mSelectedDepartment==$obj->mDepartments[i].department_id)}
                {assign var=selected value="class=\"selected\""}
            {/if}
            <li>
                <a {$selected} href="{$obj->mDepartments[i].link_to_department}">
                    {$obj->mDepartments[i].name nofilter}
                </a>
            </li>
        {/section}
    </ul>
</div>