/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern.entities;

/**
 *
 * @author MSI
 */
public class Prod {
     private int id;
    
    private float  prix;
        private String nom;
    private boolean status;
    private int rate;
        private String desc;
            private String cat;



public Prod()
{}
    public Prod(float prix, String nom, boolean status, int rate, String desc, String cat) {
        this.id=id;
        this.prix = prix;
        this.nom = nom;
        this.status = status;
        this.rate = rate;
        this.desc = desc;
        this.cat = cat;
    }

    public Prod(int id,float prix, String nom, boolean status, int rate, String desc, String cat) {
        this.id=id;
        this.prix = prix;
        this.nom = nom;
        this.status = status;
        this.rate = rate;
        this.desc = desc;
        this.cat = cat;
    }
    public int getId(){
        return id;
    }
 public void setId(int id) {
        this.id = id;
    }
    public float getPrix() {
        return prix;
    }

    public void setPrix(float prix) {
        this.prix = prix;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public boolean getStatus() {
        return status;
    }

    public void setStatus(boolean status) {
        this.status = status;
    }

    public int getRate() {
        return rate;
    }

    public void setRate(int rate) {
        this.rate = rate;
    }

    public String getDesc() {
        return desc;
    }

    public void setDesc(String desc) {
        this.desc = desc;
    }

    public String getCat() {
        return cat;
    }

    public void setCat(String cat) {
        this.cat = cat;
    }

    @Override
    public String toString() {
        return "Prod{" + "prix=" + prix + ", nom=" + nom + ", status=" + status + ", rate=" + rate + ", desc=" + desc + ", cat=" + cat + '}';
    }

  
    
    
    
}
