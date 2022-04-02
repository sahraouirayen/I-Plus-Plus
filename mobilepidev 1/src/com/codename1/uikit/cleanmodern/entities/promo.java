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
public class promo {
    private int id;
    private int pourcent;
    private String date;
    public promo(int pourcent, String date) {
         this.pourcent = pourcent;
        this.date = date;
    }

    public promo(int id, int pourcent, String date) {
        this.id = id;
        this.pourcent = pourcent;
        this.date = date;
    }

    public promo() {
    }
    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getPourcent() {
        return pourcent;
    }

    public void setPourcent(int pourcent) {
        this.pourcent = pourcent;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    @Override
    public String toString() {
        return "promo{" + "id=" + id + ", pourcent=" + pourcent + ", date=" + date + '}';
    }
     
   

    
 
}
