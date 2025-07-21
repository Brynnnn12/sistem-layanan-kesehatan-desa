<?php

namespace App\Livewire\About;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $visi = [
            'Menjadi pusat layanan kesehatan desa yang profesional dan terpercaya.',
            'Meningkatkan kualitas hidup masyarakat melalui pelayanan kesehatan yang optimal.',
            'Mewujudkan masyarakat desa yang sehat, mandiri, dan sejahtera.'
        ];
        $misi = [
            'Memberikan pelayanan kesehatan yang ramah, cepat, dan tepat kepada seluruh warga desa.',
            'Meningkatkan edukasi dan kesadaran masyarakat tentang pentingnya pola hidup sehat.',
            'Mengembangkan program kesehatan preventif, promotif, dan kuratif secara berkelanjutan.'
        ];
        return view('livewire.about.about', compact('visi', 'misi'));
    }
}
