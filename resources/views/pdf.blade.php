<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume PDF</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 14px;  }
        h1 { margin-bottom: 2px; }
        .section { margin-top: 20px; }
    </style>
</head>
<body>
<h1>{{ $resume['name'] ?? '' }}</h1>
<p>{{ $resume['title'] ?? '' }}</p>
<p>Email: {{ $resume['email'] ?? '' }} | Phone: {{ $resume['phone'] ?? '' }}</p>
<p>Address: {{ $resume['address'] ?? '' }}</p>
<p>LinkedIn: {{ $resume['linkedin'] ?? '' }} | GitHub: {{ $resume['github'] ?? '' }}</p>

<div class="section">
    <h2>Summary</h2>
    <p>{{ $resume['summary'] ?? '' }}</p>
</div>

<div class="section">
    <h2>Education</h2>
    @foreach($resume['education'] ?? [] as $edu)
        <p><strong>{{ $edu['degree'] ?? '' }}</strong><br>{{ $edu['description'] ?? '' }}</p>
    @endforeach
</div>

<div class="section">
    <h2>Skills</h2>
    <ul>
        @foreach($resume['skills'] ?? [] as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
</div>

<div class="section">
    <h2>Experience</h2>
    @foreach($resume['experience'] ?? [] as $exp)
        <p>
            <strong>{{ $exp['position'] ?? '' }} at {{ $exp['company'] ?? '' }}</strong><br>
            <small>{{ $exp['duration'] ?? '' }}</small><br>
            {{ $exp['description'] ?? '' }}
        </p>
    @endforeach
</div>
</body>
</html>
