<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('age')->nullable();
            $table->string('dob')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('residence')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('usinvestor')->nullable();
            $table->string('investortype')->nullable();
            $table->string('accredited')->nullable();
            $table->string('hearabout')->nullable();
            $table->string('capital')->nullable();
            $table->string('funds')->nullable();
            $table->string('lovetoknow')->nullable();
            $table->string('bitcoin')->nullable();
            $table->uuid('referrer_id')->nullable();
            $table->integer('referrer_reward')->default(0);
            $table->uuid('referral_token')->nullable()->unique();
            $table->string('document_front')->nullable();
            $table->string('document_back')->nullable();
            $table->string('img_name')->nullable();
            $table->string('img_url')->nullable();
            $table->string('bitcoin_address')->nullable();
            $table->string('ethereum_address')->nullable();
            $table->string('usdt_address')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
