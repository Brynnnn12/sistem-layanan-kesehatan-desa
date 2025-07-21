<?php

namespace App\Livewire\Faq;

use Livewire\Component;

class Faq extends Component
{
    public function render()
    {
        $faqs = [
            [
                'question' => 'Apa itu Sistem Layanan Kesehatan Desa?',
                'answer' => 'Sistem Layanan Kesehatan Desa adalah platform yang menyediakan informasi dan layanan kesehatan untuk masyarakat desa.'
            ],
            [
                'question' => 'Bagaimana Cara Melihat Jadwal?',
                'answer' => 'Anda dapat melihat jadwal kegiatan kesehatan melalui menu Jadwal Kegiatan di aplikasi.'
            ],
            [
                'question' => 'Apa saja layanan yang tersedia?',
                'answer' => 'Layanan yang tersedia meliputi jadwal kegiatan kesehatan, riwayat pemeriksaan, dan informasi tentang kesehatan.'
            ]
        ];
        return view('livewire.faq.faq', compact('faqs'));
    }
}
