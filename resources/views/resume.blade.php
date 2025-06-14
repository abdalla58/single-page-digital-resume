<!doctype html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - {{ $resume['name'] ?? '' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-50 text-gray-800 dark:bg-gray-500  font-sans">


<div class="px-6 py-10 max-w-4xl mx-auto bg-white shadow-md rounded-lg">
    <!-- Header -->
    <header class="text-center border-b pb-6">
        <h1 class="text-4xl font-bold">{{ $resume['name'] ?? '' }}</h1>
        <p class="text-lg text-gray-600">{{ $resume['title'] ?? '' }}</p>

        <div class="mt-2 text-sm text-gray-500 space-y-1">
            <p>{{ $resume['email'] ?? '' }}</p>
            <p>{{ $resume['phone'] ?? '' }}</p>
            <p>{{ $resume['address'] ?? '' }}</p>
            <p>
                @if(!empty($resume['linkedin']))
                    <i class="fab fa-linkedin"></i>
                    <a href="{{ $resume['linkedin'] }}" class="text-blue-600 hover:underline" target="_blank">LinkedIn</a>
                @endif
                @if(!empty($resume['github']))
                    | <i class="fab fa-github"></i>
                        <a href="{{ $resume['github'] }}" class="text-blue-600 hover:underline" target="_blank">GitHub</a>
                @endif
            </p>
        </div>
    </header>

    <!-- Summary -->
    @if(!empty($resume['summary']))
        <section class="mt-2">
            <h2 class="text-2xl font-semibold border-b mb-2">Summary</h2>
            <p class="text-gray-700">{{ $resume['summary'] }}</p>
        </section>
    @endif

    <!-- Education -->
    @if(!empty($resume['education']))
        <section class="mt-2">
            <h2 class="text-2xl font-semibold border-b mb-2">Education</h2>
            @foreach($resume['education'] as $education)
                <div class="mb-4">
                    <h3 class="text-lg font-medium">{{ $education['degree'] ?? '' }}</h3>
                    <p class="text-gray-600 text-sm">{{ $education['description'] ?? '' }}</p>
                </div>
            @endforeach
        </section>
    @endif

    <!-- Skills -->
    @if(!empty($resume['skills']))
        <section class="mt-2">
            <h2 class="text-2xl font-semibold border-b mb-2">Skills</h2>
            <ul class="list-disc list-inside grid grid-cols-2 gap-1 text-gray-700">
                @foreach($resume['skills'] as $skill)
                    <li>{{ $skill }}</li>
                @endforeach
            </ul>
        </section>
    @endif

    <!-- Experience -->
    @if(!empty($resume['experience']))
        <section class="mt-2">
            <h2 class="text-2xl font-semibold border-b mb-2">Experience</h2>
            @foreach($resume['experience'] as $experience)
                <div class="mb-6">
                    <h3 class="text-lg font-medium">
                        {{ $experience['position'] ?? '' }} - <span class="text-gray-600">{{ $experience['company'] ?? '' }}</span>
                    </h3>
                    <p class="text-sm text-gray-500">{{ $experience['duration'] ?? '' }}</p>
                    <p class="text-gray-700 mt-1">{{ $experience['description'] ?? '' }}</p>
                </div>
            @endforeach
        </section>
    @endif
</div>
  <!-- Download Button -->
<div class="flex justify-center mt-4 mb-6">
    <a href="{{ route('resume.download') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition mr-6">
        Download PDF
    </a>

    <a href="{{ route('resume.download', ['preview' => 1]) }}"
       class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition ">
        Show PDF
    </a>
</div>

</body>
</html>
