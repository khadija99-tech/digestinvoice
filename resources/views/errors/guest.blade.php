@extends('portal.ninja2020.layout.error')

@section('title', __($title) ?? 'Server Error')
@section('code', __($code) ?? '500')
@section('message', __($message) ?? 'System Error')
