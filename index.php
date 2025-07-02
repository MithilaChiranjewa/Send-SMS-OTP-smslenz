<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Send OTP via SMSlenz</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 class="text-sm font-bold mb-6 text-center text-zinc-600">Test OTP Send (SMSlenz) By @MCRM</h2>
        <form action="send-otp.php" method="POST" class="space-y-5">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Mobile Number <span class="text-xs text-gray-500">(Ex: +9477XXXXXXX)</span>:</label>
                <input type="text" name="phone" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="+9477XXXXXXX">
            </div>
            <div>
                <input type="submit" value="Send OTP" class="w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700 transition duration-200 cursor-pointer">
            </div>
        </form>
    </div>
</body>

</html>


