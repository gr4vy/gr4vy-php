# Gr4vy\RolesApi

All URIs are relative to https://api.plantly.gr4vy.app.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteRoleAssignment()**](RolesApi.md#deleteRoleAssignment) | **DELETE** /roles/assignments/{role_assignment_id} | Delete role assignment
[**listRoleAssignments()**](RolesApi.md#listRoleAssignments) | **GET** /roles/assignments | List role assignments
[**listRoles()**](RolesApi.md#listRoles) | **GET** /roles | List roles
[**newRoleAssignment()**](RolesApi.md#newRoleAssignment) | **POST** /roles/assignments | New role assignment


## `deleteRoleAssignment()`

```php
deleteRoleAssignment($role_assignment_id)
```

Delete role assignment

Deletes a role assignment. The associated assignee will no longer be assigned the role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_assignment_id = 1cdac457-400f-4866-8da6-5c193a8db158; // string | The unique ID for the role assignment.

try {
    $apiInstance->deleteRoleAssignment($role_assignment_id);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->deleteRoleAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_assignment_id** | **string**| The unique ID for the role assignment. |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRoleAssignments()`

```php
listRoleAssignments($role_id, $assignee_type, $assignee_id, $limit, $cursor): \Gr4vy\model\RoleAssignments
```

List role assignments

Returns a list of role assignments.  Role assignments can be filtered for a given role by providing the `role_id` search parameter, or for a given assignee by providing both the `assignee_type` and `assignee_id` parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = be828248-56de-481e-a580-44b6e1d4df81; // string | Filters for role assignments for the role that has a matching `id` value.
$assignee_type = user; // string | Filters for role assignments for the assignee of the given type.
$assignee_id = be828248-56de-481e-a580-44b6e1d4df81; // string | Filters for role assignments for the assignee that has a matching `id` value. The `assignee_type` must also be specified.
$limit = 1; // int | Defines the maximum number of items to return for this request.
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.

try {
    $result = $apiInstance->listRoleAssignments($role_id, $assignee_type, $assignee_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->listRoleAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| Filters for role assignments for the role that has a matching &#x60;id&#x60; value. | [optional]
 **assignee_type** | **string**| Filters for role assignments for the assignee of the given type. | [optional]
 **assignee_id** | **string**| Filters for role assignments for the assignee that has a matching &#x60;id&#x60; value. The &#x60;assignee_type&#x60; must also be specified. | [optional]
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]

### Return type

[**\Gr4vy\model\RoleAssignments**](../Model/RoleAssignments.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRoles()`

```php
listRoles($limit, $cursor): \Gr4vy\model\Roles
```

List roles

Returns a list of roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1; // int | Defines the maximum number of items to return for this request.
$cursor = ZXhhbXBsZTE; // string | A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the `next_cursor` field. Similarly the `previous_cursor` can be used to reverse backwards in the list.

try {
    $result = $apiInstance->listRoles($limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->listRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Defines the maximum number of items to return for this request. | [optional] [default to 20]
 **cursor** | **string**| A cursor that identifies the page of results to return. This is used to paginate the results of this API.  For the first page of results, this parameter can be left out. For additional pages, use the value returned by the API in the &#x60;next_cursor&#x60; field. Similarly the &#x60;previous_cursor&#x60; can be used to reverse backwards in the list. | [optional]

### Return type

[**\Gr4vy\model\Roles**](../Model/Roles.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newRoleAssignment()`

```php
newRoleAssignment($role_assignment_request): \Gr4vy\model\RoleAssignment
```

New role assignment

Adds a role assignment, in effect applying a role to the given assignee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Gr4vy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Gr4vy\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_assignment_request = new \Gr4vy\model\RoleAssignmentRequest(); // \Gr4vy\model\RoleAssignmentRequest

try {
    $result = $apiInstance->newRoleAssignment($role_assignment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->newRoleAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_assignment_request** | [**\Gr4vy\model\RoleAssignmentRequest**](../Model/RoleAssignmentRequest.md)|  | [optional]

### Return type

[**\Gr4vy\model\RoleAssignment**](../Model/RoleAssignment.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
