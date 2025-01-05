<?php

use App\Models\User;

if (!function_exists('flashMessage')) {

	function flashMessage($message, $type = 'success'): void
	{
		session()->flash('message', $message);
		session()->flash('type', $type);
	}
}

if (!function_exists('usernameGenerator')) {

	function usernameGenerator(string $name): string
	{
		$username = strtolower(preg_replace('/\s+/', '_', trim($name)));
		$originalUsername = $username;
		$count = 1;

		while (User::where('username', $username)->exists()) {
			$username = $originalUsername . $count;
			$count++;
		}

		return $originalUsername;
	}
}

if (!function_exists('signatureMidtrans')) {

	function signatureMidtrans($orderId, $statusCode, $grossAmount, $serverKey): string
	{
		return hash('sha512', $orderId . $statusCode . $grossAmount . $serverKey);
	}
}