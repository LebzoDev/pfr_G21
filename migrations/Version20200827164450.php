<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200827164450 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE brief (id INT AUTO_INCREMENT NOT NULL, formateur_id INT NOT NULL, langue VARCHAR(255) NOT NULL, nom_brief VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, contexte VARCHAR(255) NOT NULL, modalite_pedagogique VARCHAR(255) NOT NULL, modalite_evaluation VARCHAR(255) NOT NULL, critere_evaluation VARCHAR(255) NOT NULL, image_promo LONGBLOB NOT NULL, archive TINYINT(1) NOT NULL, etat_brouillon_assigne_valide VARCHAR(255) NOT NULL, create_at DATE NOT NULL, INDEX IDX_1FBB1007155D8F51 (formateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brief_tag (brief_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_452A4F36757FABFF (brief_id), INDEX IDX_452A4F36BAD26311 (tag_id), PRIMARY KEY(brief_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brief_niveau (brief_id INT NOT NULL, niveau_id INT NOT NULL, INDEX IDX_1BF05631757FABFF (brief_id), INDEX IDX_1BF05631B3E9C81 (niveau_id), PRIMARY KEY(brief_id, niveau_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brief_apprenant (id INT AUTO_INCREMENT NOT NULL, brief_ma_promo_id INT NOT NULL, apprenant_id INT NOT NULL, affecte TINYINT(1) DEFAULT NULL, rendu TINYINT(1) DEFAULT NULL, valide TINYINT(1) DEFAULT NULL, INDEX IDX_DD6198ED57574C78 (brief_ma_promo_id), INDEX IDX_DD6198EDC5697D6D (apprenant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brief_ma_promo (id INT AUTO_INCREMENT NOT NULL, brief_id INT NOT NULL, promo_id INT NOT NULL, INDEX IDX_6E0C4800757FABFF (brief_id), INDEX IDX_6E0C4800D0C07AFF (promo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chat (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, promo_id INT NOT NULL, message VARCHAR(255) DEFAULT NULL, pieces_jointes LONGBLOB DEFAULT NULL, INDEX IDX_659DF2AAA76ED395 (user_id), INDEX IDX_659DF2AAD0C07AFF (promo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaires (id INT AUTO_INCREMENT NOT NULL, formateur_id INT NOT NULL, fil_de_discussion_id INT NOT NULL, description VARCHAR(255) DEFAULT NULL, create_at DATE DEFAULT NULL, create_at_time DATETIME NOT NULL, INDEX IDX_D9BEC0C4155D8F51 (formateur_id), INDEX IDX_D9BEC0C49E665F32 (fil_de_discussion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etat_brief_groupe (id INT AUTO_INCREMENT NOT NULL, brief_id INT NOT NULL, group_promo_id INT NOT NULL, affecte TINYINT(1) DEFAULT NULL, rendu TINYINT(1) DEFAULT NULL, valide TINYINT(1) DEFAULT NULL, INDEX IDX_4C4C1AA4757FABFF (brief_id), INDEX IDX_4C4C1AA4D9F03680 (group_promo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fil_de_discussion (id INT AUTO_INCREMENT NOT NULL, apprenant_livrable_partiel_id INT NOT NULL, UNIQUE INDEX UNIQ_399E12C5DE88790F (apprenant_livrable_partiel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable_attendu (id INT AUTO_INCREMENT NOT NULL, brief_id INT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, INDEX IDX_BA983CC9757FABFF (brief_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable_attendu_apprenant (id INT AUTO_INCREMENT NOT NULL, livrabl_attendu_id INT NOT NULL, apprenant_id INT NOT NULL, url VARCHAR(255) DEFAULT NULL, INDEX IDX_BDB84E34EC67E7B1 (livrabl_attendu_id), INDEX IDX_BDB84E34C5697D6D (apprenant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ressource (id INT AUTO_INCREMENT NOT NULL, brief_id INT DEFAULT NULL, libelle VARCHAR(255) DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, piece_jointe LONGBLOB DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, INDEX IDX_939F4544757FABFF (brief_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE brief ADD CONSTRAINT FK_1FBB1007155D8F51 FOREIGN KEY (formateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE brief_tag ADD CONSTRAINT FK_452A4F36757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE brief_tag ADD CONSTRAINT FK_452A4F36BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE brief_niveau ADD CONSTRAINT FK_1BF05631757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE brief_niveau ADD CONSTRAINT FK_1BF05631B3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE brief_apprenant ADD CONSTRAINT FK_DD6198ED57574C78 FOREIGN KEY (brief_ma_promo_id) REFERENCES brief_ma_promo (id)');
        $this->addSql('ALTER TABLE brief_apprenant ADD CONSTRAINT FK_DD6198EDC5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE brief_ma_promo ADD CONSTRAINT FK_6E0C4800757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id)');
        $this->addSql('ALTER TABLE brief_ma_promo ADD CONSTRAINT FK_6E0C4800D0C07AFF FOREIGN KEY (promo_id) REFERENCES promo (id)');
        $this->addSql('ALTER TABLE chat ADD CONSTRAINT FK_659DF2AAA76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE chat ADD CONSTRAINT FK_659DF2AAD0C07AFF FOREIGN KEY (promo_id) REFERENCES promo (id)');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C4155D8F51 FOREIGN KEY (formateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE commentaires ADD CONSTRAINT FK_D9BEC0C49E665F32 FOREIGN KEY (fil_de_discussion_id) REFERENCES fil_de_discussion (id)');
        $this->addSql('ALTER TABLE etat_brief_groupe ADD CONSTRAINT FK_4C4C1AA4757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id)');
        $this->addSql('ALTER TABLE etat_brief_groupe ADD CONSTRAINT FK_4C4C1AA4D9F03680 FOREIGN KEY (group_promo_id) REFERENCES group_promo (id)');
        $this->addSql('ALTER TABLE fil_de_discussion ADD CONSTRAINT FK_399E12C5DE88790F FOREIGN KEY (apprenant_livrable_partiel_id) REFERENCES apprenant_livrable_partiel (id)');
        $this->addSql('ALTER TABLE livrable_attendu ADD CONSTRAINT FK_BA983CC9757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id)');
        $this->addSql('ALTER TABLE livrable_attendu_apprenant ADD CONSTRAINT FK_BDB84E34EC67E7B1 FOREIGN KEY (livrabl_attendu_id) REFERENCES livrable_attendu (id)');
        $this->addSql('ALTER TABLE livrable_attendu_apprenant ADD CONSTRAINT FK_BDB84E34C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE ressource ADD CONSTRAINT FK_939F4544757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id)');
        $this->addSql('ALTER TABLE livrable_partiel ADD brief_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE livrable_partiel ADD CONSTRAINT FK_37F072C5757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id)');
        $this->addSql('CREATE INDEX IDX_37F072C5757FABFF ON livrable_partiel (brief_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brief_tag DROP FOREIGN KEY FK_452A4F36757FABFF');
        $this->addSql('ALTER TABLE brief_niveau DROP FOREIGN KEY FK_1BF05631757FABFF');
        $this->addSql('ALTER TABLE brief_ma_promo DROP FOREIGN KEY FK_6E0C4800757FABFF');
        $this->addSql('ALTER TABLE etat_brief_groupe DROP FOREIGN KEY FK_4C4C1AA4757FABFF');
        $this->addSql('ALTER TABLE livrable_attendu DROP FOREIGN KEY FK_BA983CC9757FABFF');
        $this->addSql('ALTER TABLE livrable_partiel DROP FOREIGN KEY FK_37F072C5757FABFF');
        $this->addSql('ALTER TABLE ressource DROP FOREIGN KEY FK_939F4544757FABFF');
        $this->addSql('ALTER TABLE brief_apprenant DROP FOREIGN KEY FK_DD6198ED57574C78');
        $this->addSql('ALTER TABLE commentaires DROP FOREIGN KEY FK_D9BEC0C49E665F32');
        $this->addSql('ALTER TABLE livrable_attendu_apprenant DROP FOREIGN KEY FK_BDB84E34EC67E7B1');
        $this->addSql('DROP TABLE brief');
        $this->addSql('DROP TABLE brief_tag');
        $this->addSql('DROP TABLE brief_niveau');
        $this->addSql('DROP TABLE brief_apprenant');
        $this->addSql('DROP TABLE brief_ma_promo');
        $this->addSql('DROP TABLE chat');
        $this->addSql('DROP TABLE commentaires');
        $this->addSql('DROP TABLE etat_brief_groupe');
        $this->addSql('DROP TABLE fil_de_discussion');
        $this->addSql('DROP TABLE livrable_attendu');
        $this->addSql('DROP TABLE livrable_attendu_apprenant');
        $this->addSql('DROP TABLE ressource');
        $this->addSql('DROP INDEX IDX_37F072C5757FABFF ON livrable_partiel');
        $this->addSql('ALTER TABLE livrable_partiel DROP brief_id');
    }
}
