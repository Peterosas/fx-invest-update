<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('referral_bonus')->nullable();
            $table->string('phone')->nullable();
            $table->longText('address')->nullable();
            $table->longText('wallet_address')->nullable();
            $table->string('min_balance')->nullable();
            $table->string('support_email')->nullable();
            $table->string('support_password')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_password')->nullable();
            $table->string('info_email')->nullable();
            $table->string('info_password')->nullable();
            $table->string('admin_role')->default(config('company.roles.admin.role'));
            $table->string('user_role')->default(config('company.roles.user.role'));
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_settings');
    }
}
