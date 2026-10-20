
@extends('layouts.app')

@section('title', 'Settings - TravelEase')

@section('content')
@php
    $settings = session('travel_settings', [
        'site_name' => 'TravelEase',
        'contact_email' => 'admin@travelease.com',
        'currency' => 'PKR',
    ]);
@endphp

<style>
    .settings-page {
        color: #f8f9ff;
        font-family: 'Figtree', sans-serif;
    }

    .settings-heading {
        margin-bottom: 25px;
    }

    .settings-heading h1 {
        font-size: 28px;
        margin: 0 0 8px;
        font-weight: 800;
    }

    .settings-heading p {
        color: #9ba4bd;
        margin: 0;
        font-size: 14px;
    }

    .settings-card {
        max-width: 760px;
        background: #111629;
        border: 1px solid #252c43;
        border-radius: 17px;
        padding: 26px;
    }

    .settings-card h2 {
        font-size: 18px;
        margin: 0 0 8px;
    }

    .settings-description {
        color: #9ba4bd;
        font-size: 13px;
        margin-bottom: 27px;
        line-height: 1.6;
    }

    .settings-field {
        margin-bottom: 22px;
    }

    .settings-field label {
        display: block;
        margin-bottom: 9px;
        color: #cdd3e7;
        font-size: 13px;
        font-weight: 700;
    }

    .settings-field input,
    .settings-field select {
        width: 100%;
        padding: 13px 14px;
        border-radius: 10px;
        background: #0d1224;
        border: 1px solid #303751;
        color: #f8f9ff;
        font-family: inherit;
        font-size: 14px;
        outline: none;
    }

    .settings-field input:focus,
    .settings-field select:focus {
        border-color: #805cf7;
    }

    .settings-help {
        margin-top: 7px;
        font-size: 11px;
        color: #818ba8;
    }

    .settings-save {
        border: none;
        border-radius: 10px;
        padding: 13px 20px;
        background: linear-gradient(135deg, #805cf7, #5144d8);
        color: white;
        font-family: inherit;
        font-size: 13px;
        font-weight: 700;
        cursor: pointer;
    }

    .settings-save:hover {
        opacity: .9;
    }

    @media (max-width: 600px) {
        .settings-card {
            padding: 18px;
        }

        .settings-heading h1 {
            font-size: 23px;
        }
    }
</style>

<div class="settings-page">
    <div class="settings-heading">
        <h1>Settings</h1>
        <p>Manage your TravelEase business preferences.</p>
    </div>

    <form method="POST"
          action="{{ route('admin.settings.update') }}"
          class="settings-card">

        @csrf
        @method('PUT')

        <h2>
            <i class="fa-solid fa-sliders" style="color:#a995ff;"></i>
            General Preferences
        </h2>

        <p class="settings-description">
            Update your website information and preferred currency.
        </p>

        <div class="settings-field">
            <label for="site_name">Website Name</label>
            <input
                type="text"
                id="site_name"
                name="site_name"
                value="{{ old('site_name', $settings['site_name']) }}"
                required
                maxlength="100"
            >
        </div>

        <div class="settings-field">
            <label for="contact_email">Contact Email</label>
            <input
                type="email"
                id="contact_email"
                name="contact_email"
                value="{{ old('contact_email', $settings['contact_email']) }}"
                required
            >
        </div>

        <div class="settings-field">
            <label for="currency">Default Currency</label>
            <select id="currency" name="currency" required>
                <option value="PKR" {{ old('currency', $settings['currency']) == 'PKR' ? 'selected' : '' }}>
                    Pakistani Rupee (PKR)
                </option>
                <option value="USD" {{ old('currency', $settings['currency']) == 'USD' ? 'selected' : '' }}>
                    US Dollar (USD)
                </option>
                <option value="GBP" {{ old('currency', $settings['currency']) == 'GBP' ? 'selected' : '' }}>
                    British Pound (GBP)
                </option>
                <option value="EUR" {{ old('currency', $settings['currency']) == 'EUR' ? 'selected' : '' }}>
                    Euro (EUR)
                </option>
            </select>

            <div class="settings-help">
                Choose the currency you want to use as your preferred default.
            </div>
        </div>

        <button type="submit" class="settings-save">
            <i class="fa-solid fa-floppy-disk"></i>
            Save Settings
        </button>
    </form>
</div>
@endsection
