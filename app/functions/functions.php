<?php

use App\Models\Admin;
use App\Models\Permission;
use App\Models\RolesPermission;

function admin($id)
{
    return Admin::query()->find($id);
}

function lang($data)
{
    return $data->getTranslation('name', config('app.locale'));
    //return app()->getLocale() == 'ar' ? $data->name_ar : $data->name_en;
}


function get_permission_by_name($name)
{
    $permission = Permission::query()->where("name", $name)->where("status", 1)->get()->first();
    return $permission;
}
function asdasdas($name)
{
    $permission = Permission::query()->where("name", $name)->where("status", 1)->get()->first();
    return $permission;
}

function get_role_permission_checked($role_id, $permission_id)
{
    $data = RolesPermission::query()->where("role_id", $role_id)->where("permission_id", $permission_id)->get()->first();
    return $data;
}


//Variables
$image_1 = '<span class="symbol-label bg-light-primary">
																		<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-primary">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="currentColor"></path>
																				<path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>';
$image_2 = '<span class="symbol-label bg-light-success">
																		<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
																		<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor"/>
                                                                            <path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor"/>
                                                                        </svg></span>
																		<!--end::Svg Icon-->
																	</span>
																	';
