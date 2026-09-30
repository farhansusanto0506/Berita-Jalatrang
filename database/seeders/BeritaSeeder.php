<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use App\Models\Berita;
 
class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        Berita::create([
            'judul' => 'Malam Penuh Gengsi Dimulai! 16 Tim Berebut Mahkota Juara di Ajang CVC Cup 2026 Desa Jalatrang',
            'kategori' => 'Olahraga',
            'isi' => 'Himpunan Pemuda-Pemudi Dusun Cikandung yang tergabung dalam Cikandung Voli Ball Club (CVC) resmi menyelenggarakan ajang
            olahraga bertajuk CVC Cup 2026. Turnamen bola voli putra antar-dusun se-Kecamatan Cipaku ini resmi dibuka pada Sabtu, 26 September 2026,
            dan dijadwalkan berlangsung hingga 10 Oktober 2026.',
            'link' => 'https://jalatrang.id/berita/malam-penuh-gengsi-dimulai-16-tim-berebut-mahkota-juara-di-ajang-cvc-cup-2026-desa-jalatrang',
            'penulis' => 'Dadi Haryadi',
        ]);
 
        Berita::create([
            'judul' => 'Pemerintah Desa Jalatrang Kukuhkan Desa Siaga TB, Perkuat Kolaborasi Lintas Sektor Basmi Tuberkulosis',
            'kategori' => 'Pendidikan',
            'isi' => 'Pemerintah Desa Jalatrang, Kecamatan Cipaku, Kabupaten Ciamis, menunjukkan komitmen nyata dalam meningkatkan kesehatan masyarakat
            dengan menggelar Sosialisasi Pencegahan Penyakit Menular (TBC) sekaligus Pembentukan Desa Siaga Tuberkulosis (TB).
            Kegiatan strategis ini diselenggarakan pada Senin, 28 September 2026, di aula desa Jalatrang.',
            'link' => 'https://jalatrang.id/berita/pemerintah-desa-jalatrang-kukuhkan-desa-siaga-tb-perkuat-kolaborasi-lintas-sektor-basmi-tuberkulosis',
            'penulis' => 'Dadi Haryadi',
        ]);
    }
}