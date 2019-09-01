<?php

use App\MesinInferensi;
use App\Saran;
use App\Variabel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaranSeeder extends Seeder
{
    const SARANS =
      array(
        0 =>
        array(
          'batas_atas' => 32.5,
          'batas_bawah' => 30.0,
          'konten' => '<table class="MsoNormalTable" style="width: 199.2pt; margin-left: 4.65pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="266" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" rowspan="2" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Bahan Makanan</span></p>
      </td>
      <td style="width: 130.2pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" colspan="2" valign="bottom" nowrap="nowrap" width="174">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">30 g protein</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 1; height: 15.75pt;">
      <td style="width: 59.35pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="79">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">berat (g)</span></p>
      </td>
      <td style="width: 70.85pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="94">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">urt</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 2; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">beras</span></p>
      </td>
      <td style="width: 59.35pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="79">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">100</span></p>
      </td>
      <td style="width: 70.85pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="94">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1</span><span style="font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-fareast-language: IN;">&frac12;</span><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;"> gls nasi</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 3; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">telur ayam</span></p>
      </td>
      <td style="width: 59.35pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="79">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 70.85pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="94">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 btr</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 4; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">daging</span></p>
      </td>
      <td style="width: 59.35pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="79">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 70.85pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="94">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 5; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">sayuran</span></p>
      </td>
      <td style="width: 59.35pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="79">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">100</span></p>
      </td>
      <td style="width: 70.85pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="94">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 gls</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 6; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">pepaya</span></p>
      </td>
      <td style="width: 59.35pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="79">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">200</span></p>
      </td>
      <td style="width: 70.85pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="94">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 7; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">minyak</span></p>
      </td>
      <td style="width: 59.35pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="79">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">35</span></p>
      </td>
      <td style="width: 70.85pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="94">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3</span><span style="font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-fareast-language: IN;">&frac12;</span><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;"> sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 8; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">gula pasir</span></p>
      </td>
      <td style="width: 59.35pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="79">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">60</span></p>
      </td>
      <td style="width: 70.85pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="94">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">6 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 9; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">susu bubuk</span></p>
      </td>
      <td style="width: 59.35pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="79">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">10</span></p>
      </td>
      <td style="width: 70.85pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="94">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 10; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">kue RP*</span><span style="font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-fareast-language: IN;">⁾</span></p>
      </td>
      <td style="width: 59.35pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="79">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">150</span></p>
      </td>
      <td style="width: 70.85pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="94">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 11; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">madu</span></p>
      </td>
      <td style="width: 59.35pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="79">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">20</span></p>
      </td>
      <td style="width: 70.85pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="94">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 12; mso-yfti-lastrow: yes; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">agar-agar</span></p>
      </td>
      <td style="width: 59.35pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="79">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-fareast-language: IN;">&ndash;</span></p>
      </td>
      <td style="width: 70.85pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="94">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 porsi</span></p>
      </td>
      </tr>
      </tbody>
      </table>
      <p>&nbsp;</p>
      <table class="MsoNormalTable" style="width: 433.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="577" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&nbsp;</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Senin</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Selasa</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Rabu</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kamis</span></strong></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.75pt; border: none;" width="0" height="21">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 1; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pagi</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur dadar, tumis kecambah, susu + madu.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur rebus, cah brokoli, susu + madu.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur mata sapi, tumis pakis, susu + madu.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, steam telur, bunga kol kukus, susu + madu.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 2; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 3; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 4; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 10.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue pepe, teh manis</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Klepon ubi, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue cantik manis, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue pepe.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 5; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 6; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Siang</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rolade, sayur bening bayam, pepaya, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging semur, tumis buncis + wortel, pisang, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging steak, brokoli kukus, jambu, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rendang, sayur bening bayam, pear, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 7; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 8; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 9; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 10; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Malam</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam goreng, tumis kacang panjang, pear, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam kalasan, tumis kacang panjang, mangga, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam semur bali, cah kangkung, buah naga, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam suwir, tumis bunga pepaya, buah naga, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 11; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 12; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 13; mso-yfti-lastrow: yes; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      </tbody>
      </table>
      <p>&nbsp;</p>
      <table class="MsoNormalTable" style="width: 335.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="447" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&nbsp;</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Jumat</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Sabtu</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Minggu</span></strong></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.75pt; border: none;" width="0" height="21">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 1; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pagi</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur semur, cah kangkung, susu + madu</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur omelet, cah kecamba, susu + madu.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur orak arik, tumis kacang panjang, susu + madu.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 2; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 3; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 4; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 10.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue klepon ubi.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue cantik manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue pepe</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 5; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 6; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Siang</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging lada hitam, capcay, pepaya, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging dendeng, sayur sawi putih, pepaya, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rawon, kecambah kukus, alpukat, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 7; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 8; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 9; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 10; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Malam</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam bumbu bali, cah pakis, pisang, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam pop, tumis buncis wortel, pear, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam goreng, tumis kecambah, pepaya, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 11; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 12; mso-yfti-lastrow: yes; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      </tbody>
      </table>
      <p><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: IN; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">(Nella Amalia, S.ST Gizi)</span></strong></p>',
        ),
        1 =>
        array(
          'batas_atas' => 37.5,
          'batas_bawah' => 32.5,
          'konten' => '<table class="MsoNormalTable" style="width: 180.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="240" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" rowspan="2" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Bahan Makanan</span></p>
      </td>
      <td style="width: 111.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" colspan="2" valign="bottom" nowrap="nowrap" width="148">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">35 g protein</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 1; height: 15.75pt;">
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">berat (g)</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">urt</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 2; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">beras</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">150</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 gls nasi</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 3; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">telur ayam</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 btr</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 4; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">daging</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 5; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">sayuran</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">150</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1</span><span style="font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-fareast-language: IN;">&frac12;</span><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;"> gls</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 6; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">pepaya</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">200</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 7; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">minyak</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">40</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">4 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 8; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">gula pasir</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">80</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">8 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 9; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">susu bubuk</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">150</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 10; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">kue RP*</span><span style="font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-fareast-language: IN;">⁾</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">150</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 porsi</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 11; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">madu</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">20</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 12; mso-yfti-lastrow: yes; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">agar-agar</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-fareast-language: IN;">&ndash;</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 porsi</span></p>
      </td>
      </tr>
      </tbody>
      </table>
      <p>&nbsp;</p>
      <table class="MsoNormalTable" style="width: 433.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="577" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&nbsp;</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Senin</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Selasa</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Rabu</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kamis</span></strong></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.75pt; border: none;" width="0" height="21">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 1; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pagi</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur dadar, tumis kecambah, susu + madu.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur rebus, cah brokoli, susu + madu.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur mata sapi, tumis pakis, susu + madu.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, steam telur, bunga kol kukus, susu + madu.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 2; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 3; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 4; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 10.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue pepe, teh manis</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Klepon ubi, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue cantik manis, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue pepe.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 5; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 6; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Siang</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rolade, sayur bening bayam, pepaya, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging semur, tumis buncis + wortel, pisang, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging steak, brokoli kukus, jambu, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rendang, sayur bening bayam, pear, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 7; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 8; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 9; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 10; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Malam</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam goreng, tumis kacang panjang, pear, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam kalasan, tumis kacang panjang, mangga, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam semur bali, cah kangkung, buah naga, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam suwir, tumis bunga pepaya, buah naga, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 11; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 12; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 13; mso-yfti-lastrow: yes; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      </tbody>
      </table>
      <p>&nbsp;</p>
      <table class="MsoNormalTable" style="width: 335.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="447" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&nbsp;</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Jumat</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Sabtu</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Minggu</span></strong></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.75pt; border: none;" width="0" height="21">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 1; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pagi</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur semur, cah kangkung, susu + madu</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur omelet, cah kecamba, susu + madu.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur orak arik, tumis kacang panjang, susu + madu.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 2; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 3; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 4; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 10.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue klepon ubi.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue cantik manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue pepe</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 5; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 6; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Siang</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging lada hitam, capcay, pepaya, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging dendeng, sayur sawi putih, pepaya, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rawon, kecambah kukus, alpukat, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 7; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 8; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 9; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 10; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Malam</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam bumbu bali, cah pakis, pisang, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam pop, tumis buncis wortel, pear, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam goreng, tumis kecambah, pepaya, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 11; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 12; mso-yfti-lastrow: yes; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      </tbody>
      </table>
      <p><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: IN; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">(Nella Amalia, S.ST Gizi)</span></strong></p>',
        ),
        2 =>
        array(
          'batas_atas' => 50.0,
          'batas_bawah' => 37.5,
          'konten' => '<table class="MsoNormalTable" style="width: 180.0pt; margin-left: 4.65pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="240" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" rowspan="2" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Bahan Makanan</span></p>
      </td>
      <td style="width: 111.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" colspan="2" valign="bottom" nowrap="nowrap" width="148">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">40 g protein</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 1; height: 15.75pt;">
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">berat (g)</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">urt</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 2; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">beras</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">150</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 gls nasi</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 3; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">telur ayam</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 btr</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 4; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">daging</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">75</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 5; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">sayuran</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">150</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1</span><span style="font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-fareast-language: IN;">&frac12;</span><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;"> gls</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 6; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">pepaya</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">200</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 7; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">minyak</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">40</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">4 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 8; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">gula pasir</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">100</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">10 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 9; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">susu bubuk</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">20</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">4 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 10; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">kue RP*</span><span style="font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-fareast-language: IN;">⁾</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">150</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 porsi</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 11; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">madu</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">30</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 12; mso-yfti-lastrow: yes; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">agar-agar</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-fareast-language: IN;">&ndash;</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 porsi</span></p>
      </td>
      </tr>
      </tbody>
      </table>
      <p>&nbsp;</p>
      <table class="MsoNormalTable" style="width: 433.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="577" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&nbsp;</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Senin</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Selasa</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Rabu</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kamis</span></strong></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.75pt; border: none;" width="0" height="21">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 1; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pagi</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur dadar, tumis kecambah, susu + madu.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur rebus, cah brokoli, susu + madu.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur mata sapi, tumis pakis, susu + madu.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, steam telur, bunga kol kukus, susu + madu.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 2; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 3; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 4; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 10.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue pepe, teh manis</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Klepon ubi, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue cantik manis, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue pepe.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 5; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 6; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Siang</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rolade, sayur bening bayam, pepaya, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging semur, tumis buncis + wortel, pisang, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging steak, brokoli kukus, jambu, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rendang, sayur bening bayam, pear, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 7; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 8; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 9; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 10; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Malam</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam goreng, tumis kacang panjang, pear, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam kalasan, tumis kacang panjang, mangga, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam semur bali, cah kangkung, buah naga, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam suwir, tumis bunga pepaya, buah naga, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 11; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 12; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 13; mso-yfti-lastrow: yes; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      </tbody>
      </table>
      <p>&nbsp;</p>
      <table class="MsoNormalTable" style="width: 335.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="447" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&nbsp;</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Jumat</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Sabtu</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Minggu</span></strong></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.75pt; border: none;" width="0" height="21">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 1; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pagi</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur semur, cah kangkung, susu + madu</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur omelet, cah kecamba, susu + madu.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur orak arik, tumis kacang panjang, susu + madu.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 2; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 3; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 4; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 10.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue klepon ubi.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue cantik manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kue pepe</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 5; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 6; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Siang</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging lada hitam, capcay, pepaya, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging dendeng, sayur sawi putih, pepaya, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rawon, kecambah kukus, alpukat, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 7; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 8; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 9; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 10; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Malam</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam bumbu bali, cah pakis, pisang, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam pop, tumis buncis wortel, pear, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam goreng, tumis kecambah, pepaya, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 11; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 12; mso-yfti-lastrow: yes; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      </tbody>
      </table>
      <p><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: IN; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">(Nella Amalia, S.ST Gizi)</span></strong></p>',
        ),
        3 =>
        array(
          'batas_atas' => 62.5,
          'batas_bawah' => 50.0,
          'konten' => '<table class="MsoNormalTable" style="width: 180.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="240" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" rowspan="2" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Bahan Makanan</span></p>
      </td>
      <td style="width: 111.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" colspan="2" valign="bottom" nowrap="nowrap" width="148">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">60 g protein</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 1; height: 15.75pt;">
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">berat (g)</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">urt</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 2; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">beras</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">200</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 gls nasi</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 3; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">maizena</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">15</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 4; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">telur ayam</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 btr</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 5; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">daging</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 6; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">ayam</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 7; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">tempe</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">75</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 8; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">sayuran</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">200</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 gls</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 9; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">pepaya</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">300</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 10; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">minyak</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">30</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 11; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">gula pasir</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">5 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 12; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">susu bubuk</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-fareast-language: IN;">10</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 13; mso-yfti-lastrow: yes; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">100</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&frac12; gls</span></p>
      </td>
      </tr>
      </tbody>
      </table>
      <p>&nbsp;</p>
      <table class="MsoNormalTable" style="width: 433.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="577" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&nbsp;</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Senin</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Selasa</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Rabu</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kamis</span></strong></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.75pt; border: none;" width="0" height="21">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 1; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pagi</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur dadar, cah kangkung, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur rebus, sayur bayam, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur mata sapi, tumis wortel, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur semur, cah pakis, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 2; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 3; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 4; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 10.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, pear</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, pisang.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, mangga</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, jambu</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 5; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 6; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Siang</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, semur daging, tempe goreng, tumis kecambah, papaya.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging sapi lada hitam, tumis tempe, capcay, apel.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, dendeng dagih, ng sapi, tahu goreng, sayur sawi putih, naga.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rawon, kecambah rebus, tempe goreng, mangga.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 7; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 8; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 9; height: 17.25pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 17.25pt; border: none;" width="0" height="23">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 10; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 16.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding maizena + sirup</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding karamel.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding Vanila.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding tofu.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 11; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 12; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Malam</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi ayam goreng, perkedel tahu, sayur bayam + wortel, pisang.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam asam manis, tempe bacem, cah brokoli, pepaya.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam bumbu bali, tempe goreng, cah kangkung, apel.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam kalasan, tumis kacang panjang, tempe goreng, pisang.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 13; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 14; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 15; mso-yfti-lastrow: yes; height: 17.25pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 17.25pt; border: none;" width="0" height="23">&nbsp;</td>
      <!--[endif]--></tr>
      </tbody>
      </table>
      <p>&nbsp;</p>
      <table class="MsoNormalTable" style="width: 335.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="447" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&nbsp;</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Jumat</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Sabtu</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Minggu</span></strong></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.75pt; border: none;" width="0" height="21">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 1; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pagi</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, omlet telur, brokoli kukus, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur steam, wortel kukus, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur orak arik, tumis kecambah, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 2; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 3; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 4; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 10.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, pisang</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, alpukat</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, buah naga</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 5; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 6; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Siang</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging steak, buncis kukus, tumis tempe, pepaya.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rolade, sayur bayam bening, tahu goreng, pisang.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rendang, tempe goreng, oseng kacang panjang, pisang.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 7; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 8; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 9; height: 33.75pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 33.75pt; border: none;" width="0" height="45">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 10; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 16.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding coklat/vanila</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding jelly.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding Pandan</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 11; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 12; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Malam</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam bakar lalap sawi, tahu goreng, buah naga</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam pop, tumis buncis wortel, tempe orek, pepaya.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, cah pakis, ayam suwir, oseng tahu, pear.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 13; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 14; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 15; mso-yfti-lastrow: yes; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      </tbody>
      </table>
      <p><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: IN; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">(Nella Amalia, S.ST Gizi)</span></strong></p>',
        ),
        4 =>
        array(
          'batas_atas' => 67.5,
          'batas_bawah' => 62.5,
          'konten' => '<table class="MsoNormalTable" style="width: 180.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="240" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" rowspan="2" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Bahan Makanan</span></p>
      </td>
      <td style="width: 111.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" colspan="2" valign="bottom" nowrap="nowrap" width="148">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">65 g protein</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 1; height: 15.75pt;">
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">berat (g)</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">urt</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 2; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">beras</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">200</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 gls nasi</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 3; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">maizena</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">15</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 4; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">telur ayam</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 btr</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 5; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">daging</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 6; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">ayam</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 7; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">tempe</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">100</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">4 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 8; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">sayuran</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">200</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 gls</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 9; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">pepaya</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">300</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 10; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">minyak</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">30</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 11; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">gula pasir</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">5 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 12; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">susu bubuk</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-fareast-language: IN;">10</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 13; mso-yfti-lastrow: yes; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">100</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&frac12; gls</span></p>
      </td>
      </tr>
      </tbody>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <table class="MsoNormalTable" style="width: 433.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="577" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&nbsp;</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Senin</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Selasa</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Rabu</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kamis</span></strong></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.75pt; border: none;" width="0" height="21">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 1; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pagi</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur dadar, cah kangkung, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur rebus, sayur bayam, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur mata sapi, tumis wortel, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur semur, cah pakis, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 2; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 3; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 4; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 10.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, pear</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, pisang.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, mangga</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, jambu</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 5; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 6; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Siang</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, semur daging, tempe goreng, tumis kecambah, papaya.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging sapi lada hitam, tumis tempe, capcay, apel.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, dendeng dagih, ng sapi, tahu goreng, sayur sawi putih, naga.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rawon, kecambah rebus, tempe goreng, mangga.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 7; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 8; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 9; height: 17.25pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 17.25pt; border: none;" width="0" height="23">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 10; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 16.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding maizena + sirup</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding karamel.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding Vanila.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding tofu.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 11; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 12; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Malam</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi ayam goreng, perkedel tahu, sayur bayam + wortel, pisang.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam asam manis, tempe bacem, cah brokoli, pepaya.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam bumbu bali, tempe goreng, cah kangkung, apel.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam kalasan, tumis kacang panjang, tempe goreng, pisang.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 13; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 14; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 15; mso-yfti-lastrow: yes; height: 17.25pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 17.25pt; border: none;" width="0" height="23">&nbsp;</td>
      <!--[endif]--></tr>
      </tbody>
      </table>
      <p>&nbsp;</p>
      <table class="MsoNormalTable" style="width: 335pt; margin-left: 4.7pt;" border="0" width="447" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 41pt; border-width: 1pt; border-color: windowtext; padding: 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">&nbsp;</span></strong></p>
      </td>
      <td style="width: 98pt; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-left: none; padding: 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Jumat</span></strong></p>
      </td>
      <td style="width: 98pt; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-left: none; padding: 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Sabtu</span></strong></p>
      </td>
      <td style="width: 98pt; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-left: none; padding: 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Minggu</span></strong></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.75pt; border: initial none initial;" width="0" height="21">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 1; height: 15.0pt;">
      <td style="width: 41pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt; height: 15pt;" rowspan="3" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Pagi</span></strong></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Nasi, omlet telur, brokoli kukus, teh manis.</span></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Nasi, telur steam, wortel kukus, teh manis.</span></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Nasi, telur orak arik, tumis kecambah, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 2; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 3; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 4; height: 15.0pt;">
      <td style="width: 41pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt; height: 15pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Pukul 10.00</span></strong></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Susu, pisang</span></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Susu, alpukat</span></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Susu, buah naga</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 5; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 6; height: 15.0pt;">
      <td style="width: 41pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt; height: 15pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Siang</span></strong></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Nasi, daging steak, buncis kukus, tumis tempe, pepaya.</span></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Nasi, daging rolade, sayur bayam bening, tahu goreng, pisang.</span></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Nasi, daging rendang, tempe goreng, oseng kacang panjang, pisang.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 7; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 8; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 9; height: 33.75pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 33.75pt; border: initial none initial;" width="0" height="45">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 10; height: 15.0pt;">
      <td style="width: 41pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt; height: 15pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Pukul 16.00</span></strong></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\', serif;">Puding coklat/vanila</span></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\', serif;">Puding jelly.</span></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\', serif;">Puding Pandan</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 11; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 12; height: 15.0pt;">
      <td style="width: 41pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt; height: 15pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Malam</span></strong></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Nasi, ayam bakar lalap sawi, tahu goreng, buah naga</span></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Nasi, ayam pop, tumis buncis wortel, tempe orek, pepaya.</span></p>
      </td>
      <td style="width: 98pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 15pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: \'Times New Roman\', serif;">Nasi, cah pakis, ayam suwir, oseng tahu, pear.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 13; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 14; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 15; mso-yfti-lastrow: yes; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15pt; border: initial none initial;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      </tbody>
      </table>
      <p><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: IN; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">(Nella Amalia, S.ST Gizi)</span></strong></p>
      <p>&nbsp;</p>',
        ),
        5 =>
        array(
          'batas_atas' => 72.5,
          'batas_bawah' => 67.5,
          'konten' => '<table class="MsoNormalTable" style="width: 180.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="240" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" rowspan="2" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Bahan Makanan</span></p>
      </td>
      <td style="width: 111.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" colspan="2" valign="bottom" nowrap="nowrap" width="148">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">70 g protein</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 1; height: 15.75pt;">
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">berat (g)</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">urt</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 2; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">beras</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">220</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 gls nasi</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 3; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">maizena</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">15</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 4; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">telur ayam</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 btr</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 5; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">daging</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">75</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 ptg bsr</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 6; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">ayam</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">1 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 7; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">tempe</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">100</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">4 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 8; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">sayuran</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">200</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 gls</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 9; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">pepaya</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">300</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 ptg sdg</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 10; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">minyak</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">30</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">3 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 11; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">gula pasir</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">50</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">5 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 12; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">susu bubuk</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; mso-ascii-font-family: Calibri; mso-fareast-font-family: \'Times New Roman\'; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-fareast-language: IN;">10</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">2 sdm</span></p>
      </td>
      </tr>
      <tr style="mso-yfti-irow: 13; mso-yfti-lastrow: yes; height: 15.75pt;">
      <td style="width: 69.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="92">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu</span></p>
      </td>
      <td style="width: 52.8pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" nowrap="nowrap" width="70">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">100</span></p>
      </td>
      <td style="width: 58.2pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="bottom" nowrap="nowrap" width="78">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&frac12; gls</span></p>
      </td>
      </tr>
      </tbody>
      </table>
      <p>&nbsp;</p>
      <table class="MsoNormalTable" style="width: 433.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="577" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&nbsp;</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Senin</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Selasa</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Rabu</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Kamis</span></strong></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.75pt; border: none;" width="0" height="21">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 1; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pagi</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur dadar, cah kangkung, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur rebus, sayur bayam, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur mata sapi, tumis wortel, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur semur, cah pakis, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 2; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 3; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 4; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 10.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, pear</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, pisang.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, mangga</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, jambu</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 5; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 6; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Siang</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, semur daging, tempe goreng, tumis kecambah, papaya.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging sapi lada hitam, tumis tempe, capcay, apel.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, dendeng dagih, ng sapi, tahu goreng, sayur sawi putih, naga.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rawon, kecambah rebus, tempe goreng, mangga.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 7; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 8; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 9; height: 17.25pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 17.25pt; border: none;" width="0" height="23">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 10; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 16.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding maizena + sirup</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding karamel.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding Vanila.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding tofu.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 11; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 12; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Malam</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi ayam goreng, perkedel tahu, sayur bayam + wortel, pisang.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam asam manis, tempe bacem, cah brokoli, pepaya.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam bumbu bali, tempe goreng, cah kangkung, apel.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam kalasan, tumis kacang panjang, tempe goreng, pisang.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 13; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 14; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 15; mso-yfti-lastrow: yes; height: 17.25pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 17.25pt; border: none;" width="0" height="23">&nbsp;</td>
      <!--[endif]--></tr>
      </tbody>
      </table>
      <p>&nbsp;</p>
      <table class="MsoNormalTable" style="width: 335.0pt; margin-left: 4.7pt; border-collapse: collapse; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="447" cellspacing="0" cellpadding="0">
      <tbody>
      <tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 15.75pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">&nbsp;</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Jumat</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Sabtu</span></strong></p>
      </td>
      <td style="width: 98.0pt; border: solid windowtext 1.0pt; border-left: none; mso-border-top-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.75pt;" valign="top" nowrap="nowrap" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Minggu</span></strong></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.75pt; border: none;" width="0" height="21">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 1; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" nowrap="nowrap" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pagi</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, omlet telur, brokoli kukus, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur steam, wortel kukus, teh manis.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="3" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, telur orak arik, tumis kecambah, teh manis.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 2; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 3; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 4; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 10.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, pisang</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, alpukat</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Susu, buah naga</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 5; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 6; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Siang</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging steak, buncis kukus, tumis tempe, pepaya.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rolade, sayur bayam bening, tahu goreng, pisang.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, daging rendang, tempe goreng, oseng kacang panjang, pisang.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 7; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 8; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 9; height: 33.75pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 33.75pt; border: none;" width="0" height="45">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 10; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Pukul 16.00</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding coklat/vanila</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding jelly.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="2" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Puding Pandan</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 11; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 12; height: 15.0pt;">
      <td style="width: 41.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="55">
      <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><strong><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Malam</span></strong></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam bakar lalap sawi, tahu goreng, buah naga</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, ayam pop, tumis buncis wortel, tempe orek, pepaya.</span></p>
      </td>
      <td style="width: 98.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-left-alt: solid windowtext .5pt; mso-border-bottom-alt: solid windowtext .5pt; mso-border-right-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" rowspan="4" valign="top" width="131">
      <p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language: IN;">Nasi, cah pakis, ayam suwir, oseng tahu, pear.</span></p>
      </td>
      <!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 13; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 14; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      <tr style="mso-yfti-irow: 15; mso-yfti-lastrow: yes; height: 15.0pt;"><!-- [if !supportMisalignedRows]-->
      <td style="height: 15.0pt; border: none;" width="0" height="20">&nbsp;</td>
      <!--[endif]--></tr>
      </tbody>
      </table>
      <p><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: IN; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">(Nella Amalia, S.ST Gizi)</span></strong></p>',
        ),
      );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {

            $mesinInferensi = app(MesinInferensi::class);

            $variabelOuput = Variabel::query()
                ->where("nama", $mesinInferensi->namaOutput())
                ->first();

            foreach (self::SARANS as $saran) {
                Saran::create(array_merge([
                    "variabel_id" => $variabelOuput->id,
                ], $saran));
            }
        });
    }
}
