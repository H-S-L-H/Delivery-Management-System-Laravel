<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branches')->insert([
            'id' => 1,
            'branch_name' => 'ရန်ကုန်ရုံးချုပ်',
            'branch_phone' => '09979668782',
            'branch_address' => 'အမှတ်(၁၀)၊ မြေညီထပ်၊ လှိုင်မြို့နယ်၊ ရန်ကုန်',
            'branch_state' => 'ရန်ကုန်',
        ]);

        DB::table('branches')->insert([
            'id' => 2,
            'branch_name' => 'မန္တလေးရုံးချုပ်',
            'branch_phone' => '09979668782',
            'branch_address' => 'အမှတ်(၈၀)၊ မန္တလေးမြို့',
            'branch_state' => 'မန္တလေး',
        ]);

        DB::table('branches')->insert([
            'id' => 3,
            'branch_name' => 'နေပြည်တော်ရုံးချုပ်',
            'branch_phone' => '09979668782',
            'branch_address' => 'အမှတ်(၁၂၀)၊ နေပြည်တော်မြို့',
            'branch_state' => 'နေပြည်တော်',
        ]);

        DB::table('branches')->insert([
            'id' => 4,
            'branch_name' => 'ပဲခူးရုံးချုပ်',
            'branch_phone' => '09979668782',
            'branch_address' => 'အမှတ်(၇၀)၊ ပဲခူးမြို့',
            'branch_state' => 'ပဲခူး',
        ]);

        DB::table('branches')->insert([
            'id' => 5,
            'branch_name' => 'မကွေးရုံးချုပ်',
            'branch_phone' => '09979668782',
            'branch_address' => 'အမှတ်(၄၃)၊ ပွင့်ဖြူမြို့နယ်၊ မကွေး',
            'branch_state' => 'မကွေး',
        ]);

        DB::table('branches')->insert([
            'id' => 6,
            'branch_name' => 'စစ်ကိုင်းရုံးချုပ်',
            'branch_phone' => '09979668782',
            'branch_address' => 'အမှတ်(၁၀)၊ မုံရွာမြို့',
            'branch_state' => 'စစ်ကိုင်း',
        ]);

        DB::table('branches')->insert([
            'id' => 7,
            'branch_name' => 'ဧရာဝတီရုံးချုပ်',
            'branch_phone' => '09979668782',
            'branch_address' => 'အမှတ်(၁၄၀)၊ ပုသိမ်မြို့',
            'branch_state' => 'ဧရာဝတီ',
        ]);

        DB::table('branches')->insert([
            'id' => 8,
            'branch_name' => 'တနသ်ာရီရုံးချုပ်',
            'branch_phone' => '09979668782',
            'branch_address' => 'အမှတ်(၂၀၈)၊ မြိတ်မြို့',
            'branch_state' => 'တနသ်ာရီ',
        ]);
    }
}
