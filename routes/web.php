<?php

use App\Http\Controllers\Blog\IndexController as BlogIndexController;
use App\Http\Controllers\Blog\ShowController as BlogShowController;
use App\Http\Controllers\Company\IndexController as CompanyIndexController;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\PrivacyAndPolicy\IndexController as PrivacyAndPolicyIndexController;
use App\Http\Controllers\TermsAndConditions\IndexController as TermsAndConditionsIndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('front-office.index');
Route::get('/privacy-and-policy', PrivacyAndPolicyIndexController::class)->name('front-office.privacy-and-policy.index');
Route::get('/terms-and-conditions', TermsAndConditionsIndexController::class)->name('front-office.terms-and-conditions.index');
Route::get('/blogs', BlogIndexController::class)->name('front-office.blogs.index');
Route::get('/blogs/{item}/show', BlogShowController::class)->name('front-office.blogs.show');
Route::get('/company', CompanyIndexController::class)->name('front-office.company.index');