import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';

export interface PixabayResponse {
  totalHits: number;
  hits: PixabayImage[];
  total: number;
}

export interface PixabayImage {
  id: number;
  tags: string[];
  previewURL: string;
  largeImageURL: string;
  views: number;
  likes: number;
}



@Injectable({
  providedIn: 'root'
})


export class AppService {

  private apiUrl = 'https://pixabay.com/api/';
  private apiKey = '13119377-fc7e10c6305a7de49da6ecb25';

  constructor(private http: HttpClient) { }

  getImages(query: string, page: number, perPage: number, order: string): Observable<any> {
    const url = `${this.apiUrl}?key=${this.apiKey}&q=${query}&page=${page}&per_page=${perPage}&order=${order}`;
  //console.log(url);
    return this.http.get(url);
  } 

 getImageDetails(id: string): Observable<any> {
    const url = `${this.apiUrl}?key=${this.apiKey}&id=${id}`;
    return this.http.get<any>(url);
  }


buscarImagenes(busqueda: string): Observable<PixabayResponse> {
    const parametros = new HttpParams().set('key', this.apiKey).set('lang', 'es').set('q', busqueda);

    return this.http.get<PixabayResponse>(this.apiUrl, { params: parametros });
  }

buscar(busqueda: string, categoria: string): Observable<PixabayResponse> {
  let url = `https://pixabay.com/api/?key=${this.apiKey}&q=${busqueda}&lang=es`;
  if (categoria) {
    url += `&category=${categoria}`;
  }
  return this.http.get<PixabayResponse>(url);
}


}