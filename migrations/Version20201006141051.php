<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201006141051 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, color VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE feedback (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, rate VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, sended_at DATETIME NOT NULL, read_at DATETIME NOT NULL, is_read TINYINT(1) NOT NULL, ip_adress VARCHAR(255) NOT NULL, user_agent VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE help (id INT AUTO_INCREMENT NOT NULL, question VARCHAR(255) NOT NULL, answer VARCHAR(255) NOT NULL, counter VARCHAR(255) NOT NULL, positive_rate VARCHAR(255) NOT NULL, negative_rate VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, sended_at DATETIME NOT NULL, read_at DATETIME NOT NULL, is_read TINYINT(1) NOT NULL, ip_adress VARCHAR(255) NOT NULL, user_agent VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE note (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, categories VARCHAR(255) NOT NULL, create_at DATETIME NOT NULL, is_archived TINYINT(1) NOT NULL, illustration VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE terms (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, screenname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, phone INT DEFAULT NULL, birthday VARCHAR(255) NOT NULL, register_at DATE NOT NULL, activate_at DATETIME NOT NULL, login_at DATETIME NOT NULL, activation_token VARCHAR(255) NOT NULL, password_token VARCHAR(255) NOT NULL, is_deleted TINYINT(1) NOT NULL, agree_terms_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE feedback');
        $this->addSql('DROP TABLE help');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE note');
        $this->addSql('DROP TABLE terms');
        $this->addSql('DROP TABLE users');
    }
}
