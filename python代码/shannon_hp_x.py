#!/usr/bin/python
# -*- coding: UTF-8 -*-
#对txt里的数据信息熵处理 formal test 1
# written by MajestyLee 2017/3/24
import math
def get_median(data):
	temp = data
	temp.sort()
	half = len(temp) // 2
	return (temp[half] + temp[~half])
for ic in range(23):
	for jc in range(6):
		file_name1 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/x_chr" + str(ic+2) + "_shannon" + str(jc+1) + ".txt"
		# file_name2 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/or_chr" + str(ic+2) + "_shannon" + str(jc+1) + ".txt"
		file_name3 = "/Volumes/MajestyLee/graduation/chr_data/chr_hp/x_chr" + str(ic+2) + "_m" + str(jc+1) + "_hp.txt"
		urs = [0.0,0.0,0.0,0.0,0.0]
		wurs = [0.0,0.0,0.0,0.0,0.0]
		hr = [0.0,0.0,0.0,0.0,0.0]
		hr_handle = [0.0,0.0,0.0,0.0,0.0]
		psr = [0.0,0.0,0.0,0.0,0.0]
		file = open(file_name1)
		# file1 = open(file_name2)
		file_Hp = open(file_name3,'w')
		while True:
			line = file.readline()
			# line1 = file1.readline()
			if not line:
				break
			# if not line1:
			# 	break
			L = line.split()
			# L1 = line1.split()
			m = float(L[2])
			t = float(L[3])
			h = float(L[4])
			s = float(L[5])
			p = float(L[6])
			# m1 = float(L1[2])
			# t1 = float(L1[3])
			# h1 = float(L1[4])
			# s1 = float(L1[5])
			# p1 = float(L1[6])
			mr = get_median([m,t,h,s,p])
			if mr == 0.0:
				str_Hp = L[0] + " " + L[1] + " " + "0.0" + '\n'
			else:
				hr[0] = m - mr
				hr[1] = t - mr
				hr[2] = h - mr
				hr[3] = s - mr
				hr[4] = p - mr
				# hr[5] = m1 - mr
				# hr[6] = t1 - mr
				# hr[7] = h1 - mr
				# hr[8] = s1 - mr
				# hr[9] = p1 - mr
				sr = get_median(hr)
				# print m - mr
				# print hr[0]
				# print "sr:" + str(sr)
				# 3-6 format
				i =0
				for i in range(5):
					urs[i] = hr[i] / (5 * sr + 0.0001)
					# print urs[i]
				i = 0
				wurs_all = 0.0
				wh_all = 0.0
				# format 3-7
				for i in range(5):
					if abs(urs[i]) > 1:
						wurs[i] = 0
					else:
						wurs[i] = (1- urs[i] * urs[i]) * (1- urs[i] * urs[i])
					# print wurs[i],urs[i]
				i = 0
				# format 3-8
				for  i in range(5):
					wh_all = wh_all + wurs[i] * hr[i]
					wurs_all = wurs_all + wurs[i]
				if wurs_all == 0:
					Tbr = 0.0
				else:
					Tbr = wh_all / wurs_all
				hrs_all = 0.0
				# format 3-9
				for j in range(5):
					hr_handle[j] = abs(hr[j] - Tbr)
					hrs_all += hr_handle[j]
				j = 0
				Hp =0
				# format 3-10
				for j in range(5):
					if hrs_all == 0:
						psr[j] = 0
					else:
						psr[j] = hr_handle[j] / hrs_all
						if psr[j] == 1:
							Hp = Hp + 0
						elif psr[j] <= 0:
							Hp = Hp
						else:
							Hp = (-psr[j] / math.log(psr[j],2)) + Hp
				# print Hp
				str_Hp = L[0] + " " + L[1] + " " + str(Hp) + '\n'
			file_Hp.write(str_Hp)
		print file_name3
		file.close()
		# file1.close()
		file_Hp.close()

