/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaentity;

/**
 *
 * @author sahra
 */
public class actualite {
   private  int id_actualite;
   private String titre_actualite;
   private String description;
   private String etendu;
   private String image_act;
   private int rating_act;
   private int vu;

   public actualite(){
   
   }
    public actualite(int id_actualite, String titre_actualite, String description, String etendu, String image_act, int rating_act, int vu) {
        this.id_actualite = id_actualite;
        this.titre_actualite = titre_actualite;
        this.description = description;
        this.etendu = etendu;
        this.image_act = image_act;
        this.rating_act = rating_act;
        this.vu = vu;
    }

    public actualite(String titre_actualite, String description, String etendu, String image_act, int rating_act, int vu) {
        this.titre_actualite = titre_actualite;
        this.description = description;
        this.etendu = etendu;
        this.image_act = image_act;
        this.rating_act = rating_act;
        this.vu = vu;
    }

    public int getId_actualite() {
        return id_actualite;
    }

    public void setId_actualite(int id_actualite) {
        this.id_actualite = id_actualite;
    }

    public String getTitre_actualite() {
        return titre_actualite;
    }

    public void setTitre_actualite(String titre_actualite) {
        this.titre_actualite = titre_actualite;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getEtendu() {
        return etendu;
    }

    public void setEtendu(String etendu) {
        this.etendu = etendu;
    }

    public String getImage_act() {
        return image_act;
    }

    public void setImage_act(String image_act) {
        this.image_act = image_act;
    }

    public int getRating_act() {
        return rating_act;
    }

    public void setRating_act(int rating_act) {
        this.rating_act = rating_act;
    }

    public int getVu() {
        return vu;
    }

    public void setVu(int vu) {
        this.vu = vu;
    }

    @Override
    public String toString() {
        return "actualite{" + "id_actualite=" + id_actualite + ", titre_actualite=" + titre_actualite + ", description=" + description + ", etendu=" + etendu + ", image_act=" + image_act + ", rating_act=" + rating_act + ", vu=" + vu + '}';
    }
   
}
