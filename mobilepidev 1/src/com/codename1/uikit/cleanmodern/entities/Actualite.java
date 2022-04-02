/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern.entities;

/**
 *
 * @author sahra
 */
public class Actualite {
     
       private     int idActualite;
       private String titreActualite;
       private   String description;
       private String etendu;
       private  String imageAct;
       private int ratingAct;
       private int vu;

    public Actualite() {
    }

    public Actualite(int idActualite, String titreActualite, String description, String etendu, String imageAct, int ratingAct, int vu) {
        this.idActualite = idActualite;
        this.titreActualite = titreActualite;
        this.description = description;
        this.etendu = etendu;
        this.imageAct = imageAct;
        this.ratingAct = ratingAct;
        this.vu = vu;
    }

    public int getIdActualite() {
        return idActualite;
    }

    public void setIdActualite(int idActualite) {
        this.idActualite = idActualite;
    }

    public String getTitreActualite() {
        return titreActualite;
    }

    public void setTitreActualite(String titreActualite) {
        this.titreActualite = titreActualite;
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

    public String getImageAct() {
        return imageAct;
    }

    public void setImageAct(String imageAct) {
        this.imageAct = imageAct;
    }

    public int getRatingAct() {
        return ratingAct;
    }

    public void setRatingAct(int ratingAct) {
        this.ratingAct = ratingAct;
    }

    public int getVu() {
        return vu;
    }

    public void setVu(int vu) {
        this.vu = vu;
    }

    @Override
    public String toString() {
        return "Actualite{" + "idActualite=" + idActualite + ", titreActualite=" + titreActualite + ", description=" + description + ", etendu=" + etendu + ", imageAct=" + imageAct + ", ratingAct=" + ratingAct + ", vu=" + vu + '}';
    }
       
}
