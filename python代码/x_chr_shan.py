#!/usr/bin/python
# -*- coding: UTF-8 -*-
#对txt里的数据信息熵处理 formal test 1
# written by MajestyLee 2017/3/24
import math
for i in range(23):
	filename = "/Volumes/MajestyLee/gra_temp/chr_data/x_chr/result/x_chr" + str(i+2) + "_result.txt"
	file = open(filename)
	mm = [0.0,0.0,0.0,0.0,0.0,0.0]
	tt = [0.0,0.0,0.0,0.0,0.0,0.0]
	hh = [0.0,0.0,0.0,0.0,0.0,0.0]
	ss = [0.0,0.0,0.0,0.0,0.0,0.0]
	pp = [0.0,0.0,0.0,0.0,0.0,0.0]
	filename1 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/x_chr" + str(i+2) + "_shannon1.txt"
	filename2 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/x_chr" + str(i+2) + "_shannon2.txt"
	filename3 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/x_chr" + str(i+2) + "_shannon3.txt"
	filename4 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/x_chr" + str(i+2) + "_shannon4.txt"
	filename5 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/x_chr" + str(i+2) + "_shannon5.txt"
	filename6 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/x_chr" + str(i+2) + "_shannon6.txt"
	file_shannon1 = open(filename1,'w')
	file_shannon2 = open(filename2,'w')
	file_shannon3 = open(filename3,'w')
	file_shannon4 = open(filename4,'w')
	file_shannon5 = open(filename5,'w')
	file_shannon6 = open(filename6,'w')
	file_shannon = [file_shannon1,file_shannon2,file_shannon3,file_shannon4,file_shannon5,file_shannon6]
	line = file.readline()
	while True:
		line = file.readline()
		if not line:
			break
		L = line.split()
		summary = [0,0,0,0,0,0]
		L1 = L[2].split(',')	#mesen
		L2 = L[3].split(',')	#tropho
		L3 = L[4].split(',')	#h1cell
		L4 = L[5].split(',')	#stem
		L5 = L[6].split(',')	#progeni
		summary[0] += int(L1[0][1:])
		summary[0] += int(L2[0][1:])
		summary[0] += int(L3[0][1:])
		summary[0] += int(L4[0][1:])
		summary[0] += int(L5[0][1:])
		i =0
		for i in range(4):
			summary[i+1] += int(L1[i+1])
			summary[i+1] += int(L2[i+1])
			summary[i+1] += int(L3[i+1])
			summary[i+1] += int(L4[i+1])
			summary[i+1] += int(L5[i+1])
		summary[5] += int(L1[5][:-1])
		summary[5] += int(L2[5][:-1])
		summary[5] += int(L3[5][:-1])
		summary[5] += int(L4[5][:-1])
		summary[5] += int(L5[5][:-1])
		if summary[0] == 0:
			mm[0] = 0
			tt[0] = 0
			hh[0] = 0
			ss[0] = 0
			pp[0] = 0
		else:
			mm[0] = math.asin((float(L1[0][1:]) / summary[0]) ** 0.5)
			tt[0] = math.asin((float(L2[0][1:]) / summary[0]) ** 0.5)
			hh[0] = math.asin((float(L3[0][1:]) / summary[0]) ** 0.5)
			ss[0] = math.asin((float(L4[0][1:]) / summary[0]) ** 0.5)
			pp[0] = math.asin((float(L5[0][1:]) / summary[0]) ** 0.5)
		i = 0
		for i in range(4):
			if summary[i+1] == 0:
				mm[i+1] = 0
				tt[i+1] = 0
				hh[i+1] = 0
				ss[i+1] = 0
				pp[i+1] = 0
			else:
				mm[i+1] = math.asin((float(L1[i+1]) / summary[i+1]) ** 0.5)
				tt[i+1] = math.asin((float(L2[i+1]) / summary[i+1]) ** 0.5)
				hh[i+1] = math.asin((float(L3[i+1]) / summary[i+1]) ** 0.5)
				ss[i+1] = math.asin((float(L4[i+1]) / summary[i+1]) ** 0.5)
				pp[i+1] = math.asin((float(L5[i+1]) / summary[i+1]) ** 0.5)
		if summary[5] == 0:
			mm[5] = 0
			tt[5] = 0
			hh[5] = 0
			ss[5] = 0
			pp[5] = 0
		else:
			mm[5] = math.asin((float(L1[5][:-1]) / summary[5]) ** 0.5)
			tt[5] = math.asin((float(L2[5][:-1]) / summary[5]) ** 0.5)
			hh[5] = math.asin((float(L3[5][:-1]) / summary[5]) ** 0.5)
			ss[5] = math.asin((float(L4[5][:-1]) / summary[5]) ** 0.5)
			pp[5] = math.asin((float(L5[5][:-1]) / summary[5]) ** 0.5)
		i = 0
		# print summary
		for i in range(6):
			str_shannon = L[0] + " " + L[1] + " " + str(mm[i]) + " " + str(tt[i]) + " " + str(hh[i]) + " " + str(ss[i]) + " " + str(pp[i]) + "\n"
			# print str_shannon
			file_shannon[i].write(str_shannon)
	file.close()
	print filename
	for j in range(6):
		file_shannon[j].close()
