<?php

test('resume', function () {
    $response = $this->get('/resume');
    $response->assertSee('Skills');
    $response->assertStatus(200);
});
test('md', function () {
    $response = $this->get('/md');
    $response->assertSee('Skills');
    $response->assertStatus(200);
});
test('download', function () {
    $response = $this->get('/resume/download');
    $response->assertStatus(200);
    $response->assertHeader('content-disposition', 'attachment; filename=abdalla-ahmed.pdf');
});

// namespace Tests\Feature;
// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
// use Illuminate\Support\Facades\Storage;
// use Tests\TestCase;
//
// class ResumeFeatureTest extends TestCase
// {
//    /**
//     * A basic feature test example.
//     *
//     * @return void
//     */
//    public function testResume()
//    {
//        $response = $this->get('/resume');
//        $response->assertStatus(200);
//        $response->assertSee('Skills');
//    }
//    public function test_markdown_resume_page_loads()
//    {
//        // Make sure resume.md exists first
//        Storage::put('public/resume.md', '#Abdalla Ahmed');
//
//        $response = $this->get('/md');
//
//        $response->assertStatus(200);
//        $response->assertSee('Abdalla Ahmed');
//    }
//    public function test_resume_pdf_download_works()
//    {
//        $response = $this->get('/resume/download');
//
//        $response->assertStatus(200);
//        $response->assertHeader('content-disposition', 'attachment; filename=Abdalla.pdf');
//    }
//
// }
