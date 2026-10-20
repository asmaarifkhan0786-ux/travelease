@extends('layouts.app')

@section('title', 'My Profile - TravelEase')
@section('breadcrumb', 'My Profile')
@section('header_title', 'Account Profile')

@section('content')
@php
    $user = auth()->user();
@endphp

<div style="max-width: 1050px; margin: 0 auto;">

    <div style="margin-bottom: 25px;">
        <div style="font-size: 11px; color: #a995ff; font-weight: 700; letter-spacing: 1.5px; margin-bottom: 8px;">
            ACCOUNT MANAGEMENT
        </div>
        <h1 style="font-size: 28px; font-weight: 800; margin-bottom: 8px;">
            My Profile
        </h1>
        <p style="color: #9ba4bd; font-size: 14px; line-height: 1.7;">
            Manage your personal information and profile photo.
        </p>
    </div>

    <form action="{{ route('admin.profile.update') }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div style="display: grid; grid-template-columns: minmax(0, 0.8fr) minmax(0, 1.5fr); gap: 22px; align-items: start;">

            <div class="content-card" style="text-align: center;">
                <div style="font-size: 12px; color: #9ba4bd; text-align: left; margin-bottom: 22px;">
                    PROFILE PHOTO
                </div>

                <div style="width: 112px; height: 112px; border-radius: 28px; margin: 0 auto 18px; overflow: hidden; background: linear-gradient(135deg, #805cf7, #5144d8); display: flex; align-items: center; justify-content: center; font-size: 38px; font-weight: 800; color: white; border: 3px solid #343653;">
                    @if ($user && $user->profile_photo_path)
                        <img id="photoPreview"
                             src="{{ asset('storage/' . $user->profile_photo_path) }}"
                             alt="Profile photo"
                             style="width: 100%; height: 100%; object-fit: cover;">
                    @else
                        <span id="photoInitial">
                            {{ strtoupper(substr($user->name ?? 'A', 0, 1)) }}
                        </span>
                        <img id="photoPreview"
                             src=""
                             alt="Photo preview"
                             style="display: none; width: 100%; height: 100%; object-fit: cover;">
                    @endif
                </div>

                <h2 style="font-size: 20px; margin-bottom: 6px;">
                    {{ $user->name ?? 'Administrator' }}
                </h2>

                <p style="color: #9ba4bd; font-size: 12px; margin-bottom: 24px; overflow-wrap: anywhere;">
                    {{ $user->email ?? '' }}
                </p>

                <label for="photo"
                       style="display: block; padding: 12px; border: 1px dashed #5144d8; background: rgba(128,92,247,.08); border-radius: 10px; cursor: pointer; color: #c9bcff;">
                    <i class="fa-solid fa-camera"></i>
                    Choose New Photo
                </label>

                <input type="file"
                       name="photo"
                       id="photo"
                       accept=".jpg,.jpeg,.png,.webp"
                       style="display: none;"
                       onchange="previewProfilePhoto(event)">

                <p style="font-size: 11px; color: #77819d; line-height: 1.7; margin-top: 12px;">
                    JPG, PNG or WEBP<br>Maximum file size: 2 MB
                </p>
            </div>

            <div class="content-card">
                <div style="margin-bottom: 25px;">
                    <h2 style="font-size: 18px; font-weight: 750; margin-bottom: 7px;">
                        Personal Information
                    </h2>
                    <p style="font-size: 12px; color: #9ba4bd;">
                        Update the details associated with your account.
                    </p>
                </div>

                <div style="margin-bottom: 22px;">
                    <label for="name">Full Name</label>
                    <div style="position: relative;">
                        <i class="fa-regular fa-user"
                           style="position: absolute; left: 14px; top: 15px; color: #9ba4bd;"></i>
                        <input class="form-control"
                               style="padding-left: 42px;"
                               type="text"
                               id="name"
                               name="name"
                               value="{{ old('name', $user->name ?? '') }}"
                               maxlength="100"
                               required>
                    </div>
                    @error('name')
                        <p style="color: #ff9ba7; font-size: 12px; margin-top: 7px;">{{ $message }}</p>
                    @enderror
                </div>

                <div style="margin-bottom: 22px;">
                    <label for="email">Email Address</label>
                    <div style="position: relative;">
                        <i class="fa-regular fa-envelope"
                           style="position: absolute; left: 14px; top: 15px; color: #9ba4bd;"></i>
                        <input class="form-control"
                               style="padding-left: 42px;"
                               type="email"
                               id="email"
                               name="email"
                               value="{{ old('email', $user->email ?? '') }}"
                               maxlength="255"
                               required>
                    </div>
                    @error('email')
                        <p style="color: #ff9ba7; font-size: 12px; margin-top: 7px;">{{ $message }}</p>
                    @enderror
                </div>

                @error('photo')
                    <p style="color: #ff9ba7; font-size: 12px; margin-bottom: 15px;">{{ $message }}</p>
                @enderror

                <div style="display: flex; justify-content: flex-end; flex-wrap: wrap; gap: 12px; border-top: 1px solid #252c43; padding-top: 22px;">
                    <a href="{{ route('admin.dashboard') }}"
                       style="display: inline-flex; align-items: center; justify-content: center; padding: 12px 18px; border: 1px solid #303751; border-radius: 10px; color: #cbd2e5; font-size: 12px; font-weight: 700;">
                        Cancel
                    </a>

                    <button type="submit" class="btn-primary">
                        <i class="fa-solid fa-check"></i>
                        Save Changes
                    </button>
                </div>
            </div>

        </div>
    </form>
</div>

<script>
function previewProfilePhoto(event) {
    const file = event.target.files[0];

    if (!file) return;

    const preview = document.getElementById('photoPreview');
    const initial = document.getElementById('photoInitial');

    preview.src = URL.createObjectURL(file);
    preview.style.display = 'block';

    if (initial) {
        initial.style.display = 'none';
    }
}
</script>

<style>
@media (max-width: 700px) {
    .page-content form > div {
        grid-template-columns: minmax(0, 1fr) !important;
    }
}
</style>
@endsection