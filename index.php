<?php
/**
 * Created by IntelliJ IDEA.
 * User: fabrice
 * Date: 21/02/2018
 * Time: 13:11
 */

use Diool\Features\Request;

require 'vendor/autoload.php';

$api = new Request('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL215bW9uZXltb2JpbGUuZXUuYXV0aDAuY29tLyIsInN1YiI6IldkZmZrSDFKZ1lGVGFNMXg4VjNabHZaaGZZb0UzWnRVQGNsaWVudHMiLCJhdWQiOiJodHRwczovL2NvcmUuZGlvb2wuY29tL2FwaS92MS8iLCJpYXQiOjE1MTE4Njk0ODMsImV4cCI6MTU0MzQyNjQzNSwic2NvcGUiOiJhdXRoMHw1OWNlNTM2ODg5OTM3MDBjNjA3MmZiZmYgc3VwZXJfbWVyY2hhbnQgZmFicmljZV95b3BhIGZhYnJpY2VfeW9wYUB5YWhvby5mciBNT05FVEFSWV9BQ0NPVU5UIEFQSV9UUkFOU0ZFUl9BSVJUSU1FIEFQSV9QQVlNRU5UIEFQSV9GVU5EU19UUkFOU0ZFUiIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.pBFfD3dJT2U-WFDhzZzQIIKMt07_Wwk9kgdikvcR548');
var_dump($api->getBalance());