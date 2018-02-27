#!/usr/bin/python
# -*- coding: UTF-8 -*-
#把高变异低变异区域映射到 基因组里
# written by MajestyLee 2017/4/6
import math
import numpy
import xlrd
import pickle
from collections import Counter
temp_name = ["x_chr","or_chr","mix_chr"]
ttt = ["X","Y"]
for ic in range(23):
	xlname = "/Users/majestylee/Downloads/map/chr" + str(ic+2) + ".xlsx"
	# xlname = "/Users/majestylee/Downloads/map/chr" + ttt[ic] + ".xlsx"
	data = xlrd.open_workbook(xlname)
	table = data.sheets()[0]
	row = table.nrows
	col = table.ncols
	dic_all = {}
	data_sort = {}
	for i in range(1,row):
		L = table.row_values(i)
		dic_all[int(L[4])] = str(L[12]) + " txstart"
		dic_all[int(L[5])] = str(L[12]) + " txend"
		dic_all[int(L[6])] = str(L[12]) + " cdsstart"
		dic_all[int(L[7])] = str(L[12]) + " cdsend"
		k = 0
		exonstart = L[9].split(',')
		exonend = L[10].split(',')
		for k in range(int(L[8])):
			dic_all[int(exonstart[k])] = str(L[12]) + " exonstart"
			dic_all[int(exonend[k])] = str(L[12]) + " exonend"
	data_key = dic_all.keys()
	data_key.sort()
	for key in data_key:
		# print key
		data_sort[key] = dic_all[key]
	print xlname
	for jj in range(3):
		for kk in range(6):
			mylist = []
			filename1 = "/Volumes/MajestyLee/graduation/chr_data/chr_high/" + temp_name[jj] + str(ic+2) + "_m" + str(kk+1) + "_hp_high.txt"
			filename2 = "/Volumes/MajestyLee/graduation/chr_data/chr_map/" + temp_name[jj] + str(ic+2) + "_m" + str(kk+1) + "_hp_high_map.txt"
			filename3 = "/Volumes/MajestyLee/graduation/chr_data/chr_map_count/" + temp_name[jj] + str(ic+2) + "_m" + str(kk+1) + "_hp_high_map_count.txt"
			file3 = open(filename2,'w')
			count = 0
			file_high = open(filename1)
			while True:
				line = file_high.readline()
				if not line:
					break
				L = line.split()
				L1 = int(L[1])
				if L1 < data_key[0]:
					str_final = "chr" + str(ic+2) + " " + L[1] + " " + L[2] + " before " + data_sort[data_key[0]].split()[0] + "\n"
					str_temp = " before " + data_sort[data_key[0]].split()[0]
					mylist.append(str_temp)
				elif L1 > data_key[len(data_sort)-1]:
					str_final = "chr" + str(ic+2) + " " + L[1] + " " + L[2] + " after " + data_sort[data_key[len(data_sort)-1]].split()[0] + "\n"
					str_temp = " after " + data_sort[data_key[len(data_sort)-1]].split()[0]
					mylist.append(str_temp)
				else:
					for i in range(count,len(data_sort)-1):
						if (data_key[i] < L1 and L1 < data_key[i+1]):
							d_s = data_sort[data_key[i]].split()
							d_e = data_sort[data_key[i+1]].split()
							if d_s[0] == d_e[0]:
								if d_s[1] == "exonstart":
									str_final = "chr" + str(ic+2) + " " + L[1] + " " + L[2] + " " + d_s[0] + " exon" + "\n"
									str_temp = d_s[0] + " exon"
									mylist.append(str_temp)
								if (d_s[1] == "txstart" or d_e[1] == "txend"):
									str_final = "chr" + str(ic+2) + " " + L[1] + " " + L[2] + " " + d_s[0] + " tx" + "\n"
									str_temp = d_s[0] + " tx"
									mylist.append(str_temp)
								if ((d_s[1] == "exonend" and d_e[1] == "exonstart") or (d_s[1] == "cdsstart") or (d_e[1] == "cdsend")):
									str_final = "chr" + str(ic+2) + " " + L[1] + " " + L[2] + " " + d_s[0] + " cds" + "\n"
									str_temp = d_s[0] + " cds"
									mylist.append(str_temp)
							else:
								str_final = "chr" + str(ic+2) + " " + L[1] + " " + L[2] + " " + "between " + d_s[0] + " and " + d_e[0] + "\n"
								str_temp = "between " + d_s[0] + " and " + d_e[0]
								mylist.append(str_temp)
							count = i
							break
				file3.write(str_final)
			print filename2
			f = open(filename3,'w')
			s = repr(Counter(mylist))
			f.writelines(s)
			f.close()
			file_high.close()
			file3.close()
