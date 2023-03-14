<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('whatsapp')->after('password')->nullable()->unique();
            $table->string('telegram')->after('whatsapp')->nullable()->unique();
            $table->string('mobile')->after('password')->nullable();
            $table->string('mobile_2')->after('mobile')->nullable();
            $table->string('passport')->after('telegram')->nullable()->unique();
            $table->string('passport_authority')->after('passport')->nullable();
            $table->date('passport_dateofexpiry')->after('passport_authority')->nullable();
            $table->string('passport_nationality')->after('passport_dateofexpiry')->nullable();
            $table->string('IDdocument')->after('document_type')->nullable()->unique();
            $table->string('profession')->after('telegram')->nullable();
            $table->date('birthdate')->after('profession')->nullable();
            $table->enum('marital_status', ['single', 'married', 'separated', 'divorced', 'engaged', 'widowed'])->default('single')->after('profession');
            $table->enum('blood_type', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'])->nullable()->after('birthdate');
            $table->string('country')->after('marital_status')->nullable();
            $table->string('state')->after('country')->nullable();
            $table->string('city')->after('state')->nullable();
            $table->string('postal_code')->after('city')->nullable();
            $table->string('address')->after('postal_code')->nullable();
            $table->string('neighborhood')->after('address')->nullable();
            $table->string('coordinator')->after('neighborhood')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('emergency_contact_email')->nullable();
            //files
            $table->string('photo')->nullable();
            $table->string('documentid_file')->nullable();
            $table->string('passport_file')->nullable();
            $table->string('proof-of-address_file')->nullable();
            $table->string('judicial-record_file')->nullable();
            $table->string('rut_file')->nullable();
            // Bank information
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->enum('type-of-bank-account', ['saving', 'checking'])->nullable();
            //Personal Identification Card
            $table->string('pic_security_contact_name')->nullable();
            $table->string('pic_security_contact_phone')->nullable();
            $table->string('pic_security_contact_email')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('votes');
            $table->dropColumn('whatsapp');
            $table->dropColumn('telegram');
            $table->dropColumn('mobile');
            $table->dropColumn('mobile_2');
            $table->dropColumn('passport');
            $table->dropColumn('IDdocument');
            $table->dropColumn('profession');
            $table->dropColumn('birthdate');
            $table->dropColumn('marital_status');
            $table->dropColumn('country');
            $table->dropColumn('state');
            $table->dropColumn('city');
            $table->dropColumn('postal_code');
            $table->dropColumn('address');
            $table->dropColumn('neighborhood');
            $table->dropColumn('coordinator');
        });
    }
};
